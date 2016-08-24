<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Model\BaseModel;

class Post extends BaseModel
{
    //
    public static $rules = [
    		'title' => 'required|max:100',
    		'url' => 'required',
    		'context' => 'required|max:500'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User', 'created_by');
    }

    public function votes()
    {
    	return $this->hasMany('App\Vote');
    }

    public static function searchPostTitle($searchBy, $searchedOption)
    {
    	return Post::join('users', 'users.id', '=', 'posts.created_by')
    	->where('users.name', 'LIKE', '%' . $searchedOption . '%')
    	->orWhere('posts.title', 'LIKE', '%' . $searchedOption . '%')
    	->orWhere('posts.url', 'LIKE', '%' . $searchedOption . '%')
    	->orWhere('posts.context', 'LIKE', '%' . $searchedOption . '%');
    	//return Post::where($searchBy, 'like', '%' . $searchedOption . '%');
    }
}
