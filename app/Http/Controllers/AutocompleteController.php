<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AutocompleteController extends Controller
{
    //for create controller - php artisan make:controller AutocompleteController

    function index()
    {
     return view('autocomplete');
    }

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('users')
        ->where('username', 'LIKE', "%{$query}%")
        ->get();
      $output = ' <ul class="list-unstyled mb-0">';
      foreach($data as $row)
      {
       $output .= '
       <li>
       <a class="list-link" href="/'.$row->username.'">
           <i class="far fa-search"></i>
           <span>'.$row->username.'</span>
       </a>
   </li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }

}