<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subreddit;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $subreddits = Subreddit::where('user_id', $user_id)->get();
    
        return view('home', compact('subreddits'));
    }
}
