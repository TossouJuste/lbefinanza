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
        $this->token=$tokens;
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
        $url='/confirmation/'.$this->token;
        return (new MailMessage)
            ->subject('Confirm Email Address')
            ->greeting('Dear user,')
            ->line('We are thrilled to welcome you to the LBE Finanza platform! Your registration has been successfully completed..')
            ->line('To confirm your email address and activate your account, please click on the link below:')
            ->action('Confirm My Email Address', url($url))
            ->line('If you are unable to click on the link, please copy and paste it into the address bar of your browser.')
            ->line('Once your email address is confirmed, you will have access to all the features of LBE Finanza. You will be able to manage your finances, make transactions, track your investments, and much more.')
            ->line('Thank you for choosing LBE Finanza, and we look forward to supporting you in your financial endeavors. If you have any questions or require further assistance, please don\'t hesitate to contact us at contact@lbefinanza.com.')

            
            ->salutation('The LBE Finanza Team');
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
