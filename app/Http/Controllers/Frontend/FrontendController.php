<?php

namespace App\Http\Controllers\Frontend;

use Auth;

use App\User;
use App\Business;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    /**
     * Display the home page.
     *
     * @return Response
     */
    public function index()
    {
        $businesses = Business::all();

        return view('frontend.index', compact('businesses'));
    }
}