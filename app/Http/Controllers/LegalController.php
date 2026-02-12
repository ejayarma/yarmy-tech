<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class LegalController extends Controller
{
    /**
     * Handle the privacy policy page request.
     */
    public function privacy(Request $request)
    {
        return Inertia::render('PrivacyPolicy');
    }

    /**
     * Handle the privacy policy page request.
     */
    public function terms(Request $request)
    {
        return Inertia::render('TermsAndConditions');
    }
}
