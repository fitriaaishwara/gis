<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class pengajuanmail extends Mailable implements ShouldQueue
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
        return $this->from('fitriaaishwara13@gmail.com','PT Global Inspeksi Sertifikasi')
        ->markdown('pengajuan-mail-template')
            ->subject('Kelengkapan Pengajuan Baru')
            ->with('offer', $this->offer);
    }
}
