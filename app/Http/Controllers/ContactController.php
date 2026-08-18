<?php
namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'engagement_type' => 'required|string',
            'message' => 'required|string',
        ]);

        // 1. Save record to Database (This always works!)
        ContactMessage::create($validated);

        // 2. Try sending email safely
        try {
            Mail::to('khangalib5191@gmail.com')->send(new ContactFormMail($validated));
        } catch (\Exception $e) {
            // Log the network error without breaking the user's page experience
            Log::error('Failed to send mail: ' . $e->getMessage());
        }

        // 3. Return success to the user
        return back()->with('success', 'Thank you! Your message has been received.');
    }
}