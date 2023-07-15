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
            ->subject('Confirmation d\'adresse e-mail')
            ->greeting('Dear user,')
            ->line('We are thrilled to welcome you to the Seded-Finance platform! Your registration has been successfully completed..')
            ->line('To confirm your email address and activate your account, please click on the link below:')
            ->action('Confirm My Email Address', url($url))
            ->line('If you are unable to click on the link, please copy and paste it into the address bar of your browser.')
            ->line('Once your email address is confirmed, you will have access to all the features of Seded-Finance. You will be able to manage your finances, make transactions, track your investments, and much more.')
            ->line('Thank you for choosing Seded-Finance, and we look forward to supporting you in your financial endeavors. If you have any questions or require further assistance, please don\'t hesitate to contact us at contact@seded-finance.com.')

            
            ->salutation('The Seded-Finance Team');
    }

   

Nous sommes ravis de vous accueillir sur la plateforme Seded-Finance ! Votre inscription a été effectuée avec succès.

Pour confirmer votre adresse e-mail et activer votre compte, veuillez cliquer sur le lien ci-dessous :

[Confirmer mon adresse e-mail](lien-de-confirmation)

Si vous ne pouvez pas cliquer sur le lien, veuillez le copier et le coller dans la barre d'adresse de votre navigateur.

Une fois votre adresse e-mail confirmée, vous aurez accès à toutes les fonctionnalités de Seded-Finance. Vous pourrez gérer vos finances, effectuer des transactions, suivre vos investissements et bien plus encore.

Nous vous remercions de votre confiance et nous sommes impatients de vous accompagner dans vos projets financiers. Si vous avez des questions ou avez besoin d'une assistance supplémentaire, n'hésitez pas à nous contacter à l'adresse support@seded-finance.com.

Cordialement,
L'équipe Seded-Finance

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
