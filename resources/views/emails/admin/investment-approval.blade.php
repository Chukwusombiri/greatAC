<x-mail::message>
# Your Investment Has Been Approved and Activated

We are pleased to inform you that your investment has been successfully approved and is now active. You have officially begun earning returns in line with your selected investment plan.

## Investment Details:

- **Investment Amount:** {{ '$' . number_format($deposit->amount) }}
- **Plan Name:** {{ $deposit->plan->name }}
- **Projected Return:** {{ $deposit->plan->interest }}% ROI after {{ $deposit->plan->duration }} hours
- **Activation Date:** {{ $deposit->updated_at->format('Y-m-d') }}

If you have any questions or require further assistance regarding your investment, please contact us at {{ config('mail.from.address') }}.

Thank you for choosing to invest with {{ config('app.name') }}. We are committed to supporting your financial success.

Best regards,  
**The {{ config('app.name') }} Team**
</x-mail::message>
