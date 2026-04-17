<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'nom'     => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'sujet'   => 'required|string|max:150',
            'message' => 'required|string|max:2000',
        ]);

        Mail::to(config('mail.from.address'))->send(new ContactMail(
            nom:    $validated['nom'],
            email:  $validated['email'],
            sujet:  $validated['sujet'],
            corps:  $validated['message'],
        ));

        return back()->with('success', 'Ton message a bien été envoyé, je te réponds très vite !');
    }
}
