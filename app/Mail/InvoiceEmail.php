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
    protected $pdf;
    protected $invoiceId;
    /**
     * Create a new message instance.
     *
     * * @param  \PDF  $pdf
     * @param  int  $invoiceId
     * @return void     
     */
    public function __construct($pdf, $invoiceId)
    {
        $this->pdf = $pdf;
        $this->invoiceId = $invoiceId;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: "Invoice # $this->invoiceId",
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.invoice',
            data: [
                'pdf' => $this->pdf,
                'invoiceId' => $this->invoiceId,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [
            [
                'data' => $this->pdf->output(),
                'name' => "invoice_{$this->invoiceId}.pdf",
            ],
        ];
    }
}
