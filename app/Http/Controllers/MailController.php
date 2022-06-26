<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;


class MailController extends Controller
{
    public function index(Request $request){
        $details=[
            'title' => 'Mister F1 Soporte',
            'body' => 'Gracias por suscribirte a las noticias de MisterF1'
        ];
        Mail::to($request->email)->send(new TestMail($details));
        return redirect()->back();
    }
}
