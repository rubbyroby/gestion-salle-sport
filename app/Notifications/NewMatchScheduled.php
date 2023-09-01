<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use App\Models\User;
use App\Models\matchs;


class NewMatchScheduled extends Notification
{
    use Queueable;
    public $matchs; // ajout de la propriété $matchs


    /**
     * Create a new notification instance.
     */
    public function __construct($matchs)
    {
        $this->matchs = $matchs;

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
    public function toMaill(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    public function toMail($notifiable)
{
    return (new MailMessage)
        ->line('Un nouveau match a été programmé :')
        ->line('Nom du match : ' . $this->matchs->tetulaire)
        ->line('Date du match : ' . $this->matchs->date);
}

public function schedule()
{
    // Code pour planifier un nouveau match

    $usersToNotify = User::all(); // Récupérer tous les utilisateurs à notifier

    foreach ($usersToNotify as $user) {
        $user->notify(new NewMatchScheduled($this)); // Envoyer la notification à chaque utilisateur
    }
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
