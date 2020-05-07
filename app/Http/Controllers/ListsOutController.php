<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Incomplete;
use Auth;
use DB;

class ListsOutController extends Controller
{
public function index(){
    $user = auth()->user()->following()->pluck('profiles.user_id');
    dd($user);
}


 public function players(){
   $allplayers = new User();
   $players = $allplayers::all()->where('usertype','=','player');

   return view ('lists.players',compact('players'));
 }
 public function coaches(){
    $allplayers = new User();
    $players = $allplayers::all()->where('usertype','=','coach');

    return view ('lists.coaches',compact('players'));
}

public function agents(){
    $allplayers = new User();
    $players = $allplayers::all()->where('usertype','=','agent');

    return view ('lists.agents',compact('players'));
}
public function scouts(){
    $allplayers = new User();
    $players = $allplayers::all()->where('usertype','=','scout');

    return view ('lists.scouts',compact('players'));
}
public function clubs(){
    $allplayers = new User();
    $players = $allplayers::all()->where('usertype','=','club');

    return view ('lists.clubs',compact('players'));
}
public function getfollowing($username){
    $myuser = User::where('username','=',$username)->firstorFail();

    $user = $myuser->following()->pluck('profiles.user_id');
    // dd($user);
    $followuser = User::whereIn('id',$user)->get();
    // dd($followuser);
    return view('connections.following',compact('followuser'));
    //    $user = auth()->user()->following()->pluck('profiles.user_id');

   // $user = auth()->user()->profile()->follower()->pluck('.user_id');
}

public function getfollower($username){
    $myuser = User::where('username','=',$username)->firstorFail();
    $user = $myuser->profile->followers()->pluck('users.id');
    $followuser = User::whereIn('id',$user)->get();

    return view('connections.followers',compact('followuser'));
    //    $user = auth()->user()->profile->followers()->pluck('users.id');
// dd($user);
//    dd($followuser);
}
}
