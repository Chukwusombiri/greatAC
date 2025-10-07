<x-mail::message>
# Investment Request Received – Payment Instructions

Dear Valued Investor,

We’re pleased to confirm that your investment deposit request has been received and is currently under review by our team.

To complete your deposit, please make a payment of the exact investment amount to the wallet address provided below:

## Payment Details:
- **Wallet Name:** {{ $deposit->wallet }}
- **Wallet Address:** {{ $deposit->address }}

Once payment is made, kindly upload a screenshot of the transaction on your deposit page linked to this specific request for verification and processing.

We appreciate your trust in {{ config('app.name') }} and look forward to supporting your financial goals through our platform.

For any assistance, feel free to reach out to our support team at {{ config('mail.from.address') }}.

Warm regards,  
**The {{ config('app.name') }} Team**
</x-mail::message>