<x-mail::message>
# Withdrawal Request Approved

Dear Valued Investor,

We’re pleased to inform you that your recent withdrawal request has been successfully reviewed, approved, and processed. The requested funds have been transferred to your designated wallet.

## Transaction Details:
- **Amount:** {{ '$'.number_format($withdrawal->amount) }}
- **Wallet Name:** {{ $withdrawal->wallet }}

We appreciate your continued trust in {{ config('app.name') }}. As you grow your investments with us, we remain committed to supporting your financial success.

Should you have any questions or require further assistance, please don’t hesitate to contact our support team at {{ config('mail.from.address') }}.

Warm regards,  
**The {{ config('app.name') }} Team**
</x-mail::message>