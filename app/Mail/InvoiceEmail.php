<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use PDF;

class InvoiceEmail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $pdf;
    public $id;
    /**
     * Create a new message instance.
     *
     * @param PDF $pdf
     * @param int $id
     */
    public function __construct($pdf, $id)
    {
        $this->pdf = $pdf;
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Invoice #' . $this->id;

        return $this->subject($subject)
                    ->view('ticketpdf')
                    ->attachData($this->pdf->output(), 'invoice.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
