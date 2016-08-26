<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $posts = \App\Post::all();
        //dd($request);
        $searchedTitle = $request->input('searchedOption');
        if(is_null($searchedTitle)){
            $posts = Post::with('user')->paginate(8);
            return view('posts.index')->with(array('posts' => $posts));
        } else{
            $posts = Post::searchPostTitle($request['searchBy'], $request['searchedOption'])->paginate(6);
        }
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Post::$rules);
        //Log::info('Passed fields in posts request' $this->request)
        $heyAPost = new Post();
        $heyAPost->title = $request->input('title');
        $heyAPost->url = $request->input('url');
        $heyAPost->context = $request->input('context');
        $heyAPost->created_by = Auth::user()->id;
        $heyAPost->save();
        Log::info($request->all());
        $request->session()->flash('message', 'Cool post added');
        return redirect()->action('PostsController@index'); //Log::info (log all info then send to create form)
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $particularPost = \App\Models\Post::find($particularPost);
        if(!$particularPost){
            abort(404);
        }
        //dd($particularPost);
        return view('posts.show', ['post' => $post]);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$this->validate($request);
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
        //return "Show a form for editing a specific host";
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
        $this->validate($request, Post::$rules);
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->url = $request->input('url');
        $post->context  = $request->input('context');
        $post->save();
        $request->session()->flash('message', 'Update added');
        return redirect()->action('PostsController@index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $post = Post::find($id);
        $post->delete();
        if(!$post){
            abort(404);
        }
        $request->session()->flash('message', 'Person Deleted');
        return redirect()->action('PostsController@index');
    }
}
