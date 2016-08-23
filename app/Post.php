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
}
