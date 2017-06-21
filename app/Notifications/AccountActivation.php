<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AccountActivation extends Notification
{
    use Queueable;

    public $user = [];
    public $key ;

    /**
     * Create a new notification instance.
     *
     */
    public function __construct($user, $key)
    {
        $this->user = $user ;
        $this->key = $key;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject("Summit Workshop Center Account Activation")
            ->line('Summit Welcome message goes here.')
            ->line("Login Credentials")
            ->line('Email : '. $this->user["email"])
            ->line("Password : ". $this->key)
            ->action('Login Now', url('/'))
            ->line('Thank you for using our application!');

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
