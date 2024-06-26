<?php

namespace App\Http\Controllers;

use App\Models\Appearance;
use App\Models\Video;
use Illuminate\Http\Request;

class AppearancesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $appearances = Appearance::where('is_published', 1)->paginate(4);

        return view('appearances', compact('appearances'));
    }
}
