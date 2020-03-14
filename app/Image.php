<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    
    protected $table = 'images';
    //Relation one To Many / de uno a muchoa

    public function comments(){
        return $this->hasMany('App\Comment');
    }

     //Relation one To Many / de uno a muchoa

     public function likes(){
        return $this->hasMany('App\Like');
    }
    
    //Relation many To One
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

}
