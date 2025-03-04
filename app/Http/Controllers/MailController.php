<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMe;

class MailController extends Controller
{
    // Traitement du formulaire + envoi du mail
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'body' => 'required|string',
        ]);

        Mail::to(env('MAIL_TO_ADDRESS'))
            ->send(new ContactMe($data));

        // Ici, on peut simplement renvoyer un redirect Inertia
        return redirect()->route('portfolio.contact')
            ->with('success', 'Message envoyé !');
    }
}
