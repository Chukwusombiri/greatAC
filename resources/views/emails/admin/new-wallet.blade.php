<x-mail::message>
# New Company Funds Wallet Created

Dear Super Administrator,

We wish to inform you that a new company funds wallet has been successfully created. Please find the details below:

- **Wallet Name:** {{ $wallet->name }}  
- **Wallet Address:** {{ $wallet->address }}

Kindly review and confirm that this action was authorized. If you did not initiate or approve this creation, please take the necessary steps to investigate or escalate immediately.

Thank you for your attention.

Best regards,  
**The {{ config('app.name') }} Team**
</x-mail::message>
