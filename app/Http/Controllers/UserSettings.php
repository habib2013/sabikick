<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserSettings extends Controller
{
        public function show($username){
            $user = User::where('username','=',$username)->firstorFail();
            return view('profiles.usersettings')->withUser($user);
           // return view('profiles.usersettings',['user'=>$user]);
        }

        public function update(User $user){
                
        }
}
