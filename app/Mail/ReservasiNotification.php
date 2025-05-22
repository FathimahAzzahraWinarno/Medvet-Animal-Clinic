<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservasiNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $reservasi;

    public function __construct($reservasi)
    {
        $this->reservasi = $reservasi;
    }

    public function build()
    {
        return $this->subject('Pengingat Jadwal Perawatan Hewan')
                    ->view('emails.reservasiNotification');
    }
}
