<x-mail::message>
# Trading Session Completed Successfully

Dear Esteemed Investor,

We are pleased to inform you that your recent trading session has concluded successfully, yielding a positive return. You may now choose to either reinvest your earnings or initiate a withdrawal directly from your portfolio balance.

## Trading Summary:
- **Updated Portfolio Balance (R.O.I):** {{ $roi }}
- **Total Profit This Month:** {{ $perMonRoi }}
- **Date:** {{ $date }}

We appreciate your continued trust in {{ config('app.name') }} as your preferred investment platform. If you have any questions or need support, please don’t hesitate to contact us at {{ config('mail.from.address') }}.

Wishing you continued success on your financial journey.

Warm regards,  
**The {{ config('app.name') }} Team**
</x-mail::message>