<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votes extends Model{
    protected $fillable = [ 'poll_id', 'choice', 'votes' ];
    protected $table = 'votes';

    public function getPoll(){
    	return $this->belongsTo('\App\Poll');
    }
}
