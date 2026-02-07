<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string',
            'message' => 'required|string|max:2000'
        ]);

        // In a real application, you would:
        // 1. Store in database
        // 2. Send email notification
        // 3. Send auto-reply to user
        
        // For now, just redirect with success message
        return redirect()->route('contact')
            ->with('contact_success', 'Merci pour votre message! Nous vous répondrons dans les plus brefs délais.');
    }
}