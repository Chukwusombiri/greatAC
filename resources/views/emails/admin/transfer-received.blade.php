<x-mail::message>
# Funds Successfully Received and Credited to Your Portfolio

Dear Valued Investor,

We are pleased to notify you that an amount of **${{$data['amount']}}** has been successfully transferred to your portfolio by **{{$data['sender']}}**. The funds have been credited to your portfolio balance and are now available for use or withdrawal.

To view your transaction history or manage your portfolio, please log in and visit the funds transfer section of your dashboard.

If you have any questions or require assistance, feel free to contact our support team at {{ config('mail.from.address') }}.

Thank you for trusting {{ config('app.name') }}.

Warm regards,  
**The {{ config('app.name') }} Team**
</x-mail::message>