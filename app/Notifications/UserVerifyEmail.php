<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class UserVerifyEmail extends VerifyEmail
{
    use Queueable;

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $code = $this->generateVerificationCode($notifiable);

        return $this->buildMailMessage($code);
    }

    /**
     * Generate a 6-character verification code and store it temporarily.
     *
     * @param mixed $notifiable
     * @return string
     */
    protected function generateVerificationCode($notifiable)
    {
        $code = strtoupper(Str::random(6));
        $expires = now()->addMinutes(Config::get('auth.verification.expire', 60));

        Cache::put($this->cacheKey($notifiable), $code, $expires);

        return $code;
    }

    /**
     * Create a cache key for storing the verification code.
     *
     * @param mixed $notifiable
     * @return string
     */
    protected function cacheKey($notifiable)
    {
        return 'email_verification_code:' . $notifiable->getKey();
    }

    /**
     * Build the email message with the verification code.
     *
     * @param string $code
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    protected function buildMailMessage($code)
    {
        return (new MailMessage)
            ->subject(Lang::get('Email Verification Required'))
            ->greeting(Lang::get('Welcome to ' . config('app.name')))
            ->line(Lang::get('Thank you for registering with us. To proceed, please verify your email address using the verification code below:'))
            ->line("**{$code}**")
            ->line(Lang::get('Please note that this code will expire in :minutes minutes.', ['minutes' => Config::get('auth.verification.expire', 60)]))
            ->line(Lang::get('If you did not initiate this registration, no further action is required and you may safely disregard this message.'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [];
    }
}
