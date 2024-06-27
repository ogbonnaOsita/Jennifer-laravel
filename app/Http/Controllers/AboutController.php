<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Social;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $about = About::get()->first();
        $socials = Social::get()->first();
        return view('about', compact('about', 'socials'));
    }
}
