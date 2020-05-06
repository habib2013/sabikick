<?php
use App\User;
use App\Profile;
use App\Faq;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/message/{id}', 'ChatController@chathome')->name('home');
Route::get('/allmessages', 'HomeController@allmessage')->name('home');
Route::post('send-message','ChatController@store');
Route::get('/chat/{id}',  'ChatController@callmessage');
Route::get('/home', 'HomeController@allmessage');
Route::get('/json','HomeController@jsonResponse');
Route::get('/sound/','ChatController@soundCheck');
Route::get('/seen/','ChatController@seenMessage');
Route::get('/seenUpdate/','ChatController@seenUpdate');
Route::get('/allmessageview/','ChatController@allMessageView');
Route::get('/singleSeenUpdate/{id}','ChatController@singleSeenUpdate');
Route::post('/typing/','ChatController@typing');
Route::get('/deletemessage/{id}','ChatController@deletemessage');
Route::get('/typing-receve/{id}','ChatController@typinc_receve');
Route::get('/users/',function(){
    return view('chat.users');
});


Route::get('/', 'FaqsController@welcome');
Route::get('/showallposts', 'PostsController@showallposts');

Route::post('/storeurl','PostsController@storeurl');

Route::get('/listplayers', 'ListsOutController@players');
Route::get('/listcoaches', 'ListsOutController@coaches');
Route::get('/listagents', 'ListsOutController@agents');
Route::get('/listscouts', 'ListsOutController@scouts');
Route::get('/listclubs', 'ListsOutController@clubs');
Route::get('/getfollowing', 'ListsOutController@getfollowing');
Route::get('/getfollower', 'ListsOutController@getfollower');

Auth::routes(['verify' => true]);

Route::get('/testmodal', function () {
    $links = Link::all();
    return view('testingmodal')->with('links', $links);
});


//--CREATE a link--//
Route::post('/users', function (Request $request) {
    $user = User::create($request->all());
  
    return Response::json($user);
});
//  Create a faq
Route::post('/faqs', function (Request $request) {
    $faq = Faq::create($request->all());
    return Response::json($faq);
});





Route::get('/users/{user_id?}', function ($user_id) {
     $user = User::find($user_id);
    return Response::json($user);
});

Route::get('/profiles/{user_id?}', function ($user_id) {
    $profile = Profile::find($user_id);
   return Response::json($profile);
});

//--GET LINK TO EDIT--//
// Route::get('/links/{link_id?}', function ($link_id) {
//     $link = Link::find($link_id);
//     return Response::json($link);
// });
 
//--UPDATE a link--//
Route::put('/users/{user_id?}', function (Request $request,User $user_id) {

    $user_id->update(['name'=>$request->name,
    'username'=> $request->username,'email'=>$request->email,'usertype'=>$request->usertype,'status'=>$request->status]);
 
    return Response::json($user);
});
 

Route::put('/faqs/{faq_id?}', function (Request $request,Faq $faq_id) {
    //  $faq = Faq::find($faq_id);
    // $faq->header = $request->header;
    // $faq->body = $request->body;  
    // $faq->save();

 $faq_id->update(['header'=>$request->header,
    'body'=> $request->body]);
    return Response::json($faq);
});
 

//--DELETE a link--//
Route::delete('/users/{user_id?}', function (User $user_id) {
    $user = User::destroy($user_id);
    return Response::json($user);
});



//Route::get('/admin/home', 'HomeController@adminHome')->name('oldadmin.home')->middleware('is_admin');


Route::get('/aboutus', 'FaqsController@aboutus');
Route::get('/contactus', 'FaqsController@contactus');
Route::get('/autocomplete', 'AutocompleteController@index');
Route::get('/adminhome','AdminsController@verify')->name('admin.home')->middleware('verified','is_admin');
Route::get('/makefaqs','AdminsController@makefaqs')->middleware('verified','is_admin');
Route::get('/userstats','AdminsController@statistics')->middleware('verified','is_admin');
//Route::get('/users/{user_id?}','AdminsController@showModal');
Route::post('/autocomplete/fetch', 'AutocompleteController@fetch')->name('autocomplete.fetch');
Route::post('follow/{user}','FollowsController@store');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faqs','FaqsController@faqs');
Route::get('/coaches','FaqsController@coaches');
Route::get('/posts/create', 'PostsController@create')->name('posts.create')->middleware('verified');
Route::get('/url/create','PostsController@createurl')->name('video.create')->middleware('verified');
Route::get('posts/{slug}',['as'=>'post.single','uses'=>'PostsController@getSingle'])->where('slug','[\w\d\-\_]+')->middleware('verified');
Route::get('/{username}',['as'=>'profile.single','uses'=>'ProfilesController@user'])->where('username','[\w\d\-\_]+');
Route::get('index/{username}',['as'=>'profile.single','uses'=>'ProfilesController@index'])->where('username','[\w\d\-\_]+');
Route::get('/settings/{username}',['as'=>'profile.single','uses'=>'ProfilesController@settings'])->where('username','[\w\d\-\_]+')->middleware('verified');
Route::get('/cvdownload/{file}',['as'=>'download.single','uses'=>'ProfilesController@download']);
Route::get('/usersettings/{username}',['as'=>'users.update','uses'=>'UserSettings@show'])->where('username','[\w\d\-\_]+')->middleware('verified');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update')->middleware('verified');
Route::patch('/users/{user}', 'UserSettings@update')->name('users.update');
Route::post('/storepost','PostsController@store');





Route::get('/faqs/{faq_id?}', function ($faq_id) {
    $faq = Faq::find($faq_id);
    return Response::json($faq);
});


