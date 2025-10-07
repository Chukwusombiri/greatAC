<x-mail::message>
# Your Investment Has Been Approved

We are pleased to inform you that your recent investment has been successfully approved and activated. You are now earning returns in accordance with your selected investment plan.

## Investment Summary:

- **Investment Amount:** {{ '$'.number_format($deposit->amount) }}
- **Investment Plan:** {{ $deposit->plan }}
- **Activation Date:** {{ $deposit->updated_at->format('Y-m-d') }}

Should you have any questions or require further assistance regarding your investment, please feel free to contact us at {{ config('mail.from.address') }}.

Thank you for partnering with us. We are committed to supporting your financial growth.

Regards,  
{{ config('app.name') }}
</x-mail::message>
