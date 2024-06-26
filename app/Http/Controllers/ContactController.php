<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Social;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $contact = Contact::get()->first();
        $socials = Social::get()->first();

        return view('contact', compact('contact', 'socials'));
    }
}
