<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Faq;

class AdminsController extends Controller
{

public function __construct(){
  return $this->middleware('auth');
}

 public function verify(){
    $user = new User();

    $userall = $user::all();
     return view('admin.verifyuser',compact('userall'));
 }

 public function makefaqs(){
  $faqs = new Faq();
  $faq =  $faqs::all();
   return view('admin.addfaqs',compact('faq'));
}


public function statistics(){
  $userfootballer = new User();
  $usercoaches = new User();
  $useragent = new User();
  $clubs = new User();
  $scouts = new User();

  $countfootballers = $userfootballer::all()->where('usertype','=','player');
  $countcoaches = $usercoaches::all()->where('usertype','=','coach');
  $countagent= $useragent::all()->where('usertype','=','agent');
  $countclubs = $clubs::all()->where('usertype','=','club');
  $countscout = $scouts::all()->where('usertype','=','scout');
  
  return view('admin.userstats',compact('countfootballers','countcoaches','countagent','countclubs','countscout'));
}

}
