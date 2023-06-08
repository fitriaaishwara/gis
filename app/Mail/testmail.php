<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class testmail extends Mailable
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
        return $this->markdown('email-template')
            ->subject('Pertanyaan')
            ->with('offer', $this->offer);
    }
}
