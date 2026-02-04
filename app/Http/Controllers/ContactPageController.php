<?php

namespace App\Http\Controllers;

use App\Models\ContactFormSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class ContactPageController extends Controller
{
    /**
     * Handle the contact page request.
     */
    public function index(Request $request)
    {
        return Inertia::render('Contact');
    }

    /**
     * Handle the form submission request.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string|max:1000',
        ]);


        $validated['ip_address'] = $request->ip();
        $validated['user_agent'] = $request->header('User-Agent');

        Log::info('Contact form submitted', $validated);

        ContactFormSubmission::create($validated);

        return back()->with('success', 'Thank you for your message!');

    }
}
