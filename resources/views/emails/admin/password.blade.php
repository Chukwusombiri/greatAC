<x-mail::message>
# Password Reset Request

Dear User,

We have received a request to reset the password associated with your account. If you initiated this request, please click the button below to proceed securely:

<x-mail::button :url="$url">
Reset Password
</x-mail::button>

If the button above does not work, you may also copy and paste the following URL directly into your browser:
[{{ $url }}]({{ $url }})

If you did not request a password reset, please disregard this message or contact our support team immediately for assistance.

Best regards,  
**The {{ config('app.name') }} Team**
</x-mail::message>