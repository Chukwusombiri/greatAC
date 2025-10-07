<x-mail::message>
# Withdrawal Request Received — Under Review

Dear Valued Investor,

This is to confirm that we have received your fund withdrawal request. Our team is currently reviewing the request to ensure secure and accurate processing. Once the review is complete, the funds will be released to your designated wallet address.

Please allow some time for the transaction to reflect, as processing durations may vary based on network conditions and other factors.

## Withdrawal Details:
- **Amount Requested:** ${{ $withdrawal->amount }}
- **Wallet Name:** {{ $withdrawal->wallet }}
- **Wallet Address:** {{ $withdrawal->address }}

We appreciate your trust in {{ config('app.name') }} as your investment partner. Should you have any questions or require assistance, please don’t hesitate to reach out to our support team.

Warm regards,  
**The {{ config('app.name') }} Team**
</x-mail::message>