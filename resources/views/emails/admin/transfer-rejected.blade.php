<x-mail::message>
# Funds Transfer Request Unsuccessful

Dear Valued Investor,

We regret to inform you that your recent funds transfer request of **${{$data['amount']}}** to **{{$data['receiver']}}** has been declined by our portfolio management team.

This may be due to policy restrictions, insufficient balance, or incomplete recipient verification. We encourage you to review your transaction details or contact our support team at {{ config('mail.from.address') }} for clarification or further guidance.

We appreciate your continued trust in {{ config('app.name') }} and are here to support you.

Warm regards,  
**The {{ config('app.name') }} Team**
</x-mail::message>