<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use Auth;


use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function _construct(){
    $this->middleware('auth');
    }
   


public function create(){

return view('posts.index');
}

public function createurl(){
    return view ('posts.videourl');
}
public function storeurl(){
    $data = request()->validate([
        'title'=>'required',
        'url'=>'required',

  ]);

      auth()->user()->videourl()->create([
          'title'=>$data['title'],
          'url' => $data['url'],
      ]);

      return redirect('/'.auth()->user()->username);
            //  return redirect('/profile/'.auth()->user()->id);
//dd(request()->all());


}
public function store(Request $request){
    $data = request()->validate([
          'title'=>'required',
          'body'=>'required',
          'slug' => 'required|min:5|max:255|alpha_dash|unique:posts',
          'image'=>['required','image']

    ]);

    $imagepath = request('image')->store('uploads','public');
    $image = Image::make(public_path("storage/{$imagepath}"))->resize(550,400);
    $image->save();

        auth()->user()->posts()->create([
            'title'=>$data['title'],
            'body' => $data['body'],
           'slug'=>$data['slug'],
            'image'=>$imagepath
        ]);

        return redirect('/'.auth()->user()->username);
              //  return redirect('/profile/'.auth()->user()->id);
//dd(request()->all());

}

public function getSingle($slug){
$post = Post::where('slug','=',$slug)->firstorFail();
return view('posts.single',compact('post'));
}

public function showallposts(){
    $allpost = new Post();
    $posts = $allpost::all();
    return view('posts.news_event',compact('posts'));
}

}
