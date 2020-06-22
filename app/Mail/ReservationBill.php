<?php

namespace App\Mail;

use App\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationBill extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = "reservation" . $this->reservation;
        return $this
            // ->attach(
            //     storage_path('app/public') . '/' . $this->comment->user->image->path,
            //     ['as' => 'profile_picture.jpeg', 'mime' => 'image/jpeg']
            // )
            //->attachFromStorage($this->comment->user->image->path, 'profile_picture.jpeg')
            ->subject($subject)
            ->view('emails.reservations.bill');

        return $this->view('view.name');
    }
}
