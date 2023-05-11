<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickets;
use App\Mail\InvoiceEmail;
use Illuminate\Support\Facades\Mail;
use PDF;

class TicketController extends Controller
{
    public function store(Request $request)
    {
        $data =  $request->all();
        $ticket = Tickets:: create($data);
        $pdfTicket = Tickets::where('id', $ticket->id)->first();
        $pdf = PDF::loadView('ticketpdf', [ 'pdfTicket'=>$pdfTicket]);
        $pdf->setPaper('A4');
       
        // Send the login details to the user's email
        Mail::send('notification.attachment.tickets', ['pdfTicket' => $pdfTicket,], function($message) use ($pdfTicket, $pdf) {
            $message->to($pdfTicket->email)
            ->subject('Ticket Purchased successfully')
            ->attachData($pdf->output(), "ticket_$pdfTicket->firstName $pdfTicket->lastName.pdf");
        });

        session()->flash('success','Ticket purchase success! Please check your email');
        return redirect()->route('pageSuccess');        

    }
    public function pdf($id)
{
   $pdfTicket = Tickets::find($id);  

    $pdf = PDF::loadView('ticketpdf', [ 'pdfTicket'=>$pdfTicket]);
    $pdf->setPaper('A4');
    return $pdf->download("ticket_$pdfTicket->firstName.$pdfTicket->lastName.pdf");

}
}
