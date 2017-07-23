<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll ;
use App\Votes;

class VotingControlelr extends Controller{
    
    public function vote(Poll $poll){
    	
    	$votes = $poll->votes ;
    	return view('votes/vote',['poll'=>$poll,'votes'=>$votes]);
    }


    public function store(Request $request){
    	$input = $request->all();
    	//UPDATE `votes` SET `votes` =votes+1 where choice = 'red' 
    	
    	$vote = Votes::where('poll_id',$input['poll'])
    	->where('choice', $input['choice'])->increment('votes');
    	
    	session(['voted' => 1]);
    	return redirect('/voting/result');
    }


    public function result(Request $request){
		$voted = $request->session()->pull('voted', 0);

    	if($voted){
    		return view('votes/charts');
    	}
       return view('votes/charts');

    }
}
