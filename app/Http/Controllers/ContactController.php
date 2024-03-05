<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }



public function send(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'date' => 'required|date',
        'message' => 'required|string',
    ]);

    Mail::to('mansournachirou246@gmail.com')->send(new ContactMessage($data));

    return redirect()->back()->with('success', 'Message envoyé avec succès!');
}

}
