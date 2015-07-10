<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;

use App\Business;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the main admin page.
     *
     * @return Response
     */
    public function index()
    {
        $businesses = Business::all();
        $users = User::all();

        return view('admin.index', compact('businesses', 'users'));
    }
}
