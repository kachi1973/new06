<?php

namespace App\Http\Controllers\Kasekisai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('kasekisai.show');
    }
}
