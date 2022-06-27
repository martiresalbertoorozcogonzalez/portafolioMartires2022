<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'body' => 'required|min:3'
        ]);

        Mail::to('martiresalbertoorozcogonzalez@gmail.com')->send(new TestMail($message));

        return 'Mensaje Enviado';
    }
}
