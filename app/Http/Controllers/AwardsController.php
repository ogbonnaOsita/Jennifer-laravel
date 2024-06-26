<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class AwardsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $perPage = 6;
        $awards = Award::paginate($perPage);

        // return response()->json($awards);

        return view('awards-grants', compact('awards'));
    }
}
