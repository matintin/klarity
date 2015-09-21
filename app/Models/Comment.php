<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function users() {
    	$this->belongsTo("App\Models\User");
    }

    public function posts() {
    	$this->belongsTo("App\Models\Post");
    }
}
