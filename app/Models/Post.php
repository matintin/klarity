<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'content', 'photo'];

    public function users() {
    	return $this->belongsTo("App\Models\User");
    }

    public function comments() {
    	return $this->hasMany("App\Models\Comment");
    }

    public function labels() {
    	return $this->belongsToMany("App\Models\Label");
    } 
}