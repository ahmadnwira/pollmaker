<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model{

	protected $guarded  = ['updated_at','id'];

	protected $table = 'poll';

	public function scopeExpired($query){
		 return $query->whereRaw('expire_date < "'.date("Y-m-d H:i:s").'"');
	}

	public function scopeCurrent($query){
		 return $query->whereRaw('expire_date > "'.date("Y-m-d H:i:s").'"');
	}

    public function votes()
    {
        return $this->hasMany('App\Votes');
    }
}

