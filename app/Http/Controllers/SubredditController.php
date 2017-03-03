<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subreddit;
use Auth;

class SubredditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subreddits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subreddit = new Subreddit; 
        $subreddit->name = strtolower($request->name); 
        $subreddit->description = $request->description;
        $subreddit->user_id = Auth::id();  
        $subreddit->save();

        return redirect()->action('HomeController@index')->with('status', 'Subreddit Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($subreddit_name)
    {
        $subreddit = Subreddit::where('name', $subreddit_name)->get();
       
         if($subreddit->isEmpty()){

            return view('subreddits.notfound', compact('subreddit_name'));
        }


        return view('subreddits.show', compact('subreddit'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
