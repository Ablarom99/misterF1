<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;


class MailController extends Controller
{
    public function sendEmail(){
        $details=[
            'title' => 'Mister F1 Soporte',
            'body' => 'Gracias por suscribirte a las noticias de MisterF1'
        ];
        Mail::to('misterf1soporte@gmail.com')->send(new TestMail($details));
    }
}
