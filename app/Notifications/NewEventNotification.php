<?php
//
//namespace App\Notifications;
//
//use Illuminate\Bus\Queueable;
//use Illuminate\Contracts\Queue\ShouldQueue;
//use Illuminate\Notifications\Messages\MailMessage;
//use Illuminate\Notifications\Notification;
//
//class NewEventNotification extends Notification
//{
//    use Queueable;
//
//    protected $event;
//
//    /**
//     * Create a new notification instance.
//     */
//    public function __construct($event)
//    {
//        $this->event = $event;
//    }
//
//    /**
//     * Get the notification's delivery channels.
//     *
//     * @return array<int, string>
//     */
//    public function via(object $notifiable): array
//    {
//        return ['mail'];
//    }
//
//    /**
//     * Get the mail representation of the notification.
//     */
//    public function toMail(object $notifiable): MailMessage
//    {
//        return (new MailMessage)
//                    ->subject('New Event Created')
//                    ->line('A new event has been created by another user.')
//                    ->action('View Event Details', url('/events/' . $this->event->id))
//                    ->line('Thank you for using our application!');
//    }
//
//    /**
//     * Get the array representation of the notification.
//     *
//     * @return array<string, mixed>
//     */
//    public function toArray(object $notifiable): array
//    {
//        return [
//            //
//        ];
//    }
//}
