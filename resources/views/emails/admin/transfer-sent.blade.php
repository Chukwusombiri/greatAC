<x-mail::message>
# Transfer Successful

Dear Valued Investor,

We’re pleased to confirm that your recent transfer of **${{$data['amount']}}** to **{{$data['receiver']}}** has been completed successfully. The amount has been credited to the recipient’s portfolio balance and is now available for withdrawal.

If you did not initiate this transaction, please contact our support team immediately at {{ config('mail.from.address') }}.

Thank you for choosing {{ config('app.name') }} for your financial transactions. We remain committed to delivering secure and seamless investment services.

Warm regards,  
**The {{ config('app.name') }} Team**
</x-mail::message>