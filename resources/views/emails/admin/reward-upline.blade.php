<x-mail::message>
# Your Referral Bonus Has Been Credited

Dear Valued Partner,

We are pleased to inform you that your referral has successfully made an investment, and as a result, your referral bonus has been activated and credited to your account.

Your continued advocacy for our platform is greatly appreciated. We encourage you to keep sharing our investment opportunities with your network. The more you refer, the more you earn.

## Referral Bonus Details:

- **Bonus Earned:** {{ '$'.number_format($bonus) }}

If you have any questions regarding your referral rewards, feel free to contact us at {{ config('mail.from.address') }}.

Thank you for your continued trust and support.

Best regards,  
**The {{ config('app.name') }} Team**
</x-mail::message>