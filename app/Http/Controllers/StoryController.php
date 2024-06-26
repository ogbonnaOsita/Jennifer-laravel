<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $stories = Story::where('is_published', 1)->orderBy('created_at', 'desc')->paginate(9);

        return view('stories', compact('stories'));
    }
}
