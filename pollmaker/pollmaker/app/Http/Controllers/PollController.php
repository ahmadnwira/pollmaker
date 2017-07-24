<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Poll ;
use \App\Votes ;
use Auth;
class PollController extends Controller{

  function __construct(){
    $this->middleware('auth', ['except' => ['show'] ]);
  }
    
  public function index(){
    
    $expired = Poll::expired()->get();
    $current = Poll::current()->get();

  	return view('poll/home',['expiredPolls'=>$expired, 'currentPolls'=>$current ]);
  
  }

  public function create(){

  	return view('poll/create');
  
  }

 	public function store(Request $request){
 	  $input = $request->all();

 		$expire = date('Y-m-d H:i:s	', strtotime("+3 days"));
 		
 		Poll::create(['user_id'=>Auth::user()->id,'title'=>$input['title'],'expire_date'=>$expire,]) ;

    $poll_id = Poll::select('id')->where('user_id',Auth::user()->id)
    ->where('title',$input['title'])
    ->orderBy('created_at','desc')
    ->limit(1)
    ->get();		
 		
 	 /*save choice <refactore later> */
 		$choices = array_slice( $input, 2, sizeof($input) ) ;
 		foreach ($choices as $choice) {
 			Votes::create(['poll_id'=>$poll_id[0]['id'], 'choice'=>$choice, 'votes'=>0]);
 		}

    return redirect('/');
 	}

   	/* when ever poll hits expiration delete token AKA set token=""  */

  public function show(Poll $poll){
    if(Auth::check()){
      $votes = $poll->votes ;
      return view('poll/poll',['votes'=>$votes,'poll'=>$poll]);
    }
    return redirect('voting/'.$poll->id.'/polls');
  }
}
