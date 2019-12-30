<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Faq;
use App\Post;


class FaqsController extends Controller
{
public function welcome(){


    $allpost = new Post();
$allfaq = new Faq();
$faq = $allfaq->all();

    $post = $allpost->all();


   return view('welcome',compact('post','faq'));
}

   public function faqs(){
        $faqs = new Faq();
       $faq =  $faqs::all();

       return view('faqs.questions',compact('faq'));
   } 

   public function aboutus(){
      return view ('aboutus');
  }
  public function contactus(){
   return view ('contactus');
}
public function coaches(){
   return view ('dummies.coaches');
}

}
