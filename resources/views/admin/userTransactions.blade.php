<x-admin-layout>
    <x-admin-nav></x-admin-nav>
    <x-admin-sidebar></x-admin-sidebar>
    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 sedan-regular">Member activity</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.users') }}">Back</a></li>
                            <li class="breadcrumb-item active">members</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @livewire('admin.user-account', ['user' => $user])
                {{-- deposits --}}
                <div class="w-full" id="deposits">
                    <div
                        class="relative mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                        <div
                            class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between items-center flex-wrap">
                            <h6 class="text-2xl sedan-regular">Deposit History</h6>
                            <button
                                class="futura-book rounded-full border border border-neutral-900 px-4 py-1 bg-neutral-900 text-gray-100"
                                onclick='Livewire.emit("openModal","admin.add-user-deposit",@json([$user->id]))'>
                                create
                            </button>
                        </div>
                        @livewire('admin.manage-user-deposits', ['user' => $user])
                    </div>
                </div>
                {{-- withdrawal --}}
                <div class="w-full" id="deposits">
                    <div
                        class="relative mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                        <div
                            class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between items-center flex-wrap">
                            <h6 class="text-2xl sedan-regular">Withdrawal History</h6>
                            <button
                                class="futura-book rounded-full border border border-neutral-900 px-4 py-1 bg-neutral-900 text-gray-100"
                                onclick='Livewire.emit("openModal","admin.add-user-withdrawal",@json([$user->id]))'>
                                create
                            </button>
                        </div>
                        @livewire('admin.manage-user-withdrawal', ['user' => $user])
                    </div>
                </div>
                {{-- wallets --}}
                <div class="w-full" id="deposits">
                  <div
                      class="relative mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                      <div
                          class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between items-center flex-wrap">
                          <h6 class="text-2xl sedan-regular">Payment methods</h6>
                          <button
                              class="futura-book rounded-full border border border-neutral-900 px-4 py-1 bg-neutral-900 text-gray-100"
                              onclick='Livewire.emit("openModal","admin.add-user-wallet",@json([$user->id]))'>
                              New Wallet
                          </button>
                      </div>
                      @livewire('admin.manage-user-wallet', ['user' => $user])
                  </div>
              </div>
              {{-- Referrals --}}
              <div class="w-full" id="referrals">
                <div
                    class="relative mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                    <div
                        class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between items-center flex-wrap">
                        <h6 class="text-2xl sedan-regular">User referrals</h6>                       
                    </div>
                    @livewire('admin.manage-user-referrals', ['user' => $user])
                </div>
            </div>
            </div>
        </section>
    </div>
    <x-admin-footer></x-admin-footer>
</x-admin-layout>

<script>
    Livewire.on('approvedDeposit', (e) => {
        toastr.success('Deposit approval was successful')
    })
    Livewire.on('approvedWithdrawal', (e) => {
        toastr.success('withdrawal approved successfully')
    })

    Livewire.on('addedDeposit', (e) => {
        toastr.success('Deposit completed and approval email sent.')
    })

    Livewire.on('addedUserWithdrawal', (e) => {
        toastr.success('Withdrawal record was created successfully.')
    })

    Livewire.on('editedWithdrawal', (e) => {
        toastr.success('Withdrawal was edited.')
    })

    Livewire.on('editedDeposit', (e) => {
        toastr.success('Deposit was edited.')
    })

    Livewire.on('deletedWithdrawal', (e) => {
        toastr.success('withdrawal record was deleted.')
    })

    Livewire.on('deletedDeposit', (e) => {
        toastr.success('Deposit record was deleted.')
    })

    Livewire.on('addedUserWallet', (e) => {
        toastr.success('User\'s wallet added.')
    })

    Livewire.on('deletedUserWallet', (e) => {
        toastr.success('User\'s wallet deleted.')
    })

    Livewire.on('editedUserWallet', (e) => {
        toastr.success('User\'s wallet edited.')
    })
    Livewire.on('receiptDeleted', (e) => {
        toastr.success('Deposit receipt deleted.')
    })
    livewire.on('rewardedUpline',e => {
        toastr.success('Successful! Referral bonus added.');
    })  
    livewire.on('deletedReferral',e => {
        toastr.success('Referral record was deleted. confirmed..');
    })  
</script>
