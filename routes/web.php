<?php

use App\Http\Controllers\Admin\AdminDashBoardController;
use App\Http\Controllers\Admin\CompanyWalletController;
use App\Http\Controllers\Admin\DepositController;
use App\Http\Controllers\GuestPagesController;
use App\Http\Controllers\User\UserContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\TransferController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\WithdrawalController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* ADMINISTRATORS */
Route::prefix('admin')
    ->group(function () {
        Route::controller(LoginController::class)->group(
            function () {
                Route::get('/login', 'login')->middleware(['guest:admin'])->name('admin.login');

                $limiter = config('fortify.limiters.login');

                Route::post('/authenticate', 'authenticate')
                    ->middleware(array_filter([
                        'guest:admin',
                        $limiter ? 'throttle:' . $limiter : null,
                    ]))->name('admin.login.authenticate');

                Route::post('/admin_logout', 'logout')->name('admin.logout');
                Route::get('/admin-forgot-password', 'forgotPassword')->middleware(['guest:admin'])->name('admin.password.forgot');
                Route::post('/admin-forgot-password', 'sendResetPassword')->middleware(['guest:admin'])->name('admin.password.send.email');
                Route::get('/admin-reset-password/{token}', 'resetPassword')->middleware(['guest:admin'])->name('admin.password.reset');
                Route::post('/admin-reset-password', 'resetComplete')->middleware(['guest:admin'])->name('admin.password.reset.complete');
            }
        );
        Route::redirect('/', '/admin/dashboard');
        Route::middleware(['auth.admin', 'auth.session.admin',])->as('admin.')->group(function () {
            /* notifications */
            Route::controller(AdminDashBoardController::class)->group(function () {
                Route::get('/dashboard', 'index')->name('dashboard');
                Route::get('/resetpwd', 'resetpwd')->name('resetpwd');
                Route::get('/administrators', 'administrators')->name('administrators');
                Route::get('/administrators/new', 'newAdministrator')->name('administrator.new');
                Route::get('/administrators/edit/{id}', 'editAdministrator')->name('administrator.edit');
                Route::get('/account/profile', 'profile')->name('admin_profile');
                Route::get('/account/security', 'passwordChange')->name('admin.password.change');
                Route::get('/user/deposit/edit/{id}', 'editUserDeposit')->name('edit.userInvestment');
                Route::get('/referral-and-rewards/referral-system', 'referralSystem')->name('referrals.show');
            });
            Route::get('/getUserWallets/{id}', [WithdrawalController::class, 'getUserWallets'])->name('getUserWallets');

            /* user management */
            Route::resource('users', UsersController::class)->names([
                'index' => 'users',
                'show' => 'user.show',
                'edit' => 'user.edit',
            ]);

            /* company wallets */
            Route::get('/company_wallets', [CompanyWalletController::class, 'index'])->name('company_wallets');
            Route::get('/company_wallet/create/{id?}', [CompanyWalletController::class, 'create'])->name('company_wallet.create');
            Route::post('/company_wallet/store', [CompanyWalletController::class, 'store'])->name('company_wallet.store');
            Route::get('/company_wallet/edit/{id}', [CompanyWalletController::class, 'edit'])->name('company_wallet.edit');
            Route::patch('/company_wallet/update/{id}', [CompanyWalletController::class, 'update'])->name('company_wallet.update');
            Route::delete('/company_wallet/delete/{id}', [CompanyWalletController::class, 'destroy'])->name('company_wallet.destroy');

            /* plans */
            Route::get('/plans', [PlanController::class, 'index'])->name('plans');
            Route::get('/plan/create/{id?}', [PlanController::class, 'create'])->name('plan.create');
            Route::get('/plan/edit/{id}', [PlanController::class, 'edit'])->name('plan.edit');
            Route::delete('/plan/destroy/{id}', [PlanController::class, 'destroy'])->name('plan.destroy');

            /* investment deposits */
            Route::resource('/deposits', DepositController::class)->names([
                'index' => 'deposits',
                'create' => 'deposit.create',
            ]);

            /* withdrawal */
            Route::resource('/withdrawals', WithdrawalController::class)->names([
                'index' => 'withdrawals',
                'create' => 'withdrawal.create',
            ]);

            /* transfer */
            Route::resource('/transfers', TransferController::class)->names([
                'index' => 'transfers',               
            ]);

            Route::controller(ReviewController::class)->group(function(){
                Route::get('/reviews','index')->name('reviews');
                Route::get('/review/create', 'create')->name('review.create');
                Route::get('/review/edit/{id}', 'edit')->name('review.edit');
            });

            /* mail */
            Route::get('/getmail/{email?}', [MailController::class, 'getmail'])->name('getmail');
        });
});

/* GUEST */
Route::controller(GuestPagesController::class)->group(function () {
    Route::get('/', 'index')->name('guestHome');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/contact-our-team', 'contact')->name('contact');
    Route::get('/about-our-company', 'about')->name('about');
    Route::get('/about-our-company/view-certificate', 'certificate')->name('certificate');
    Route::get('/financial-market-latest', 'blog')->name('blog');
    Route::get('/knowledge-base','knowledgeBase')->name('knowledge');
    Route::get('/frequent','reviews')->name('reviews');
    Route::get('/portfolio-management', 'managedInvesting')->name('managedInvesting');       
});

Route::get('/v/{token}', function ($token) {
    $url = Cache::get("email_verification:{$token}");

    if (!$url) {
        abort(404, 'Verification link expired or invalid.');
    }

    return Redirect::to($url);
})->name('verification.short');

/* USER */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    ])->prefix('user')->name('user.')->group(function () {

    Route::get('/account-restriction',function(){
        abort(423);
    })->name('restricted');

    Route::group([
        'middleware' => ['ban.check']
    ],function(){
        Route::controller(UserContactController::class)->group(function () {
            Route::get('/update-your-account-details', 'index')->name('get.personal');
            Route::post('/validate-personal-info', 'savePersonal')->name('info.personal');       
            Route::get('/update-your-contact-details', 'getContact')->name('get.contact');
            Route::post('/validate-contact-info', 'saveContact')->name('info.saveContact');
        });
    
        Route::middleware('confirmed.contact')->controller(\App\Http\Controllers\User\UserPagesController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('dashboard');
            Route::get('/completed-account-update', 'allSet')->name('allSet');
            Route::get('/pricing-table', 'pricingTable')->name('deposit.pricingTable');
            Route::get('/make-deposit-transaction/{id}', 'depositCreate')->name('deposit.create');
            Route::get('/deposit-transaction/successful', 'depositComplete')->name('deposit.complete');
            Route::get('/withdrawal-transaction/successful', 'withdrawalComplete')->name('withdrawal.complete');
            Route::get('/deposit-transaction/portfolio-balance-successful', 'depositCompleteFromBal')->name('deposit.completeFromBal');
            Route::get('/deposit-history', 'depositHistory')->name('deposits');
            Route::get('/deposit/upload-receipt/{id}', 'depositReceipt')->name('deposit.upload');
            Route::get('/make-withdrawal-transaction', 'withdrawalCreate')->name('withdrawal.create');
            Route::get('/withdrawal-history', 'withdrawalHistory')->name('withdrawals');
            Route::get('/funds-transfer-history', 'transferHistory')->name('transfers');
            Route::get('/transfer-funds-onchain', 'transferCreate')->name('transfer.create');
            Route::get('/transfer-funds-onchain/complete-wait-approval', 'transferComplete')->name('transfer.complete');
            Route::get('/transactions-history', 'transactions')->name('transactions');
            Route::get('/payment-records', 'payments')->name('payments');
            Route::get('/payment-records/create', 'createPayment')->name('payment.create');
            Route::get('/payment-records/update/{id}', 'editPayment')->name('payment.edit');
            Route::post('/remove-session-data', 'removeSession')->name('remove.depositSession');
            Route::get('/rewards/referral-program', 'viewReferral')->name('referrals');
        });
    });
});
