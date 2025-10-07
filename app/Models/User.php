<?php

namespace App\Models;

use App\Notifications\UserVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasUuids;

    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'referralId',
        'upline_id',
        'uplineUsername',
        'acBal',
        'isEarning',
        'acRoi',
        'earningCounter',
        'plan_id',
        'prev_plan_id',
        'perMonRoi'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function sendEmailVerificationNotification()
    {
        $this->notify(new UserVerifyEmail);
    }

    protected static function boot()
    {
        parent::boot();
    
        static::creating(function ($user) {
            $rand = \Illuminate\Support\Str::ulid()->toBase32();
            $user->referralId = substr(config('app.name'), 0, 2) . $rand;
        });
    }
    

    public function deposits(){
        return $this->hasMany(\App\Models\Deposit::class);
    }

    public function withdrawals(){
        return $this->hasMany(\App\Models\Withdrawal::class);
    }

    public function userwallets(){
        return $this->hasMany(\App\Models\UserWallet::class);
    }

    public function activePlan(){
        return $this->belongsTo(\App\Models\Plan::class,'plan_id');
    }

    public function prevPlan(){
        return $this->belongsTo(\App\Models\Plan::class,'prev_plan_id');
    }
    
    public function upline()
    {
        return $this->belongsTo(User::class, 'upline_id');
    }

    public function downlines(){
        return $this->hasMany(\App\Models\Referral::class,'user_id');
    }
}
