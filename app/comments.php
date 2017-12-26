<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class comments extends Model
{
   protected $fillable = ['body','post_id','updated_at','created_at'];

   public function post(){
   	return $this->belongsTo('App\Post');
   }
   public function user(){
   	return $this->belongsTo('App\User');
   }

}
