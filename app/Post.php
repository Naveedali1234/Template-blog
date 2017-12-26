<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{

	public function comments(){
		return $this->hasMany('App\comments');
	}
	public function user(){
		return $this->belongsTo('App\User');
	}
	public function scopefilter($query,$filter){
		if(isset($filter['month'])){
			$month = $filter['month'];
            $query->whereMonth('created_at',Carbon::parse($month)->month);
        }
        if(isset($filter['year'])){
        	$year = $filter['year'];
            $query->whereYear('created_at',Carbon::parse($year)->year);
        }
	}
	public static function archive(){
		return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        ->groupBy ('year','month')
        ->orderByRaw('min(created_at) desc')
        ->get();
	}
	// public function addComment($body){
	// 	comments::create([
	// 		'body'=> $body,
	// 		'post_id'=> $this->id
	// 		]);
	// }
}
