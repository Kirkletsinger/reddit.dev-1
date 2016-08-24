<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Model\BaseModel;

class Vote extends BaseModel
{
    //
    protected $table = 'votes';

    protected $fillable = ['user_id', 'post_id', 'vote'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'created_by');
    }

    public function posts()
    {
        return $this->hasMany('App\Post', 'created_by');
    }
}
