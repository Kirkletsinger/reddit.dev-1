<?php

namespace App\Http\Controllers;

use App\Vote;
use App\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($newVote->user_id);
        //
        $newVote = new Vote(); 
        $newVote->user_id = Auth::user()->id;
        $newVote->post_id = $request->input('post_id');
        $newVote->vote = $request->input('vote');
        //$disVote = Vote::firstOrCreate(['user_id' => $userId, 'post_id' => $postId]);
        $newVote->save();
        return redirect()->action('PostsController@index');


        //$disVote = Vote::where('post_id', $postId)->where($userId)->first();

        //$vote = Vote::firstOrCreate(['user_id' => $userId, 'post_id' => $postId ])

        // if(!$disVote){
        //     Vote::create(['user_id' => $userId, 'post_id' => $post_id, 'vote' => $vote);
        // } else {
        //     $disVote->value == $vote
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
