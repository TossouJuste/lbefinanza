<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ConfirmationNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
     public $token;
    public function __construct($tokens)
    {
        $token=$tokens;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Confirmation d\'adresse e-mail')
            ->line('Veuillez cliquer sur le lien ci-dessous pour confirmer votre adresse e-mail.')
            ->action('Confirmer', url('/confirmation/'.$this->token))
            ->salutation('Cordialement,Somin Equipe');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
