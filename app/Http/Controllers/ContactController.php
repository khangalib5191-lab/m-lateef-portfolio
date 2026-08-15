<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validate incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'engagement_type' => 'required|string',
            'message' => 'required|string',
        ]);

        // 2. Save record to Database
        ContactMessage::create($validated);

        // 3. Send email directly to your inbox
        Mail::to('khangalib5191@gmail.com')->send(new ContactFormMail($validated));

        // 4. Redirect back with success message
        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}