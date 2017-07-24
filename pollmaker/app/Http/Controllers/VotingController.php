<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;
use App\Votes;
class VotingController extends Controller{
    
    public function vote(Poll $poll){
        
        $votes = $poll->votes ;
        return view('votes/vote',['poll'=>$poll,'votes'=>$votes]);
    }


    public function store(Request $request){
        $input = $request->all();
        
        $vote = Votes::where('poll_id',$input['poll'])
        ->where('choice', $input['choice'])->increment('votes');
        
		return redirect()->route('voting', $input['poll']);
    }


    public function result(Poll $poll){
        return view('votes/charts',['poll'=>$poll,'votes'=>$poll->votes]) ;
    }

}