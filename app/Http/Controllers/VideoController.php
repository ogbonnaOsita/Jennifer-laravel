<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $videos = Video::where('is_published', 1)->paginate(6);

        return view('videos', compact('videos'));
    }
}
