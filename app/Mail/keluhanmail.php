<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class keluhanmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $offer;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($offer)
    {
        //
        $this->offer = $offer;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('fitriaaishwara13@gmail.com','PT Global Inspeksi Sertifikasi')->markdown('keluhan-mail-template')
            ->subject('Kritik dan Saran')
            ->with('offer', $this->offer);
    }
}
