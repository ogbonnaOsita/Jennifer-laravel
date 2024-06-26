<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Appearance;
use App\Models\Contact;
use App\Models\Social;
use App\Models\Story;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $about = About::get()->first();
        $appearances = Appearance::where('is_published', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        $videos = Video::where('is_published', 1)->orderBy('created_at', 'desc')->limit(6)->get();
        $stories = Story::where('is_published', 1)->orderBy('created_at', 'desc')->limit(6)->get();
        $contact = Contact::get()->first();
        $socials = Social::get()->first();

        return view('index', compact('about', 'appearances', 'videos', 'stories', 'contact', 'socials'));
    }
}
