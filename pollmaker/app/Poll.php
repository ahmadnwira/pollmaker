<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model{

	protected $guarded  = ['updated_at','id'];

	protected $table = 'poll';

	public function scopeExpired($query){
		 return $query->whereRaw('created_at > expire_date');
	}

	public function scopeCurrent($query){
		 return $query->whereRaw('expire_date > created_at');
	}

    public function votes()
    {
        return $this->hasMany('App\Votes');
    }
}
