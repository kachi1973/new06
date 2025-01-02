<?php

namespace App\Http\Controllers\Iraisaki;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('iraisaki.show');
    }
}
