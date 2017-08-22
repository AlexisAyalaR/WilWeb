<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;

class Proyecto extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $req)
    {
        return $this->view('mail', [
            'tipoProy' => $req->tipoProyecto,
            'descrip' => $req->descripcion,
            'telefono' => $req->telefono,
            'email' => $req->email
            ])->to('alexis9613@gmail.com');
    }
}
