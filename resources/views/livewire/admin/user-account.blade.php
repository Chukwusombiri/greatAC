<div wire:poll.visible class="futura-medium">
    <h4 class="mb-2 text-md border-b border-gray-300">Return on investment: ${{number_format($user->acRoi)}}</h4>
    <h4 class="mb-2 text-md border-b border-gray-300">Active capital: ${{number_format($user->acBal)}}</h4>
    <h4 class="mb-2 text-md border-b border-gray-300">Current earnings: ${{number_format($user->perMonRoi)}}</h4>
    <h4 class="mb-2 text-md border-b border-gray-300">Referral income: ${{number_format($user->refBonus)}}</h4>
    <h4 class="mb-2 text-md border-b border-gray-300">Total deposits: ${{number_format($user->deposits->sum('amount'))}}<a href="#deposits" class="ml-3 futura-light underline">View deposits</a></h4>
    <h4 class="mb-2 text-md border-b border-gray-300">Total withdrawals: ${{number_format($user->withdrawals->sum('amount'))}}<a href="#withdrawals" class="ml-3 futura-light underline">View withdrawals</a></h4>    
    <h4 class="mb-2 text-md border-b border-gray-300">Total referral income: ${{number_format($user->downlines()->sum('bonus'))}}<a href="#referrals" class="ml-3 futura-light underline">View referral history</a></h4>
    <h4 class="mb-10 text-md ">Total payment method: {{$user->userwallets->count()}}<a href="#wallet" class="ml-3 futura-light underline">View payment methods</a></h4>
</div>
