<?php

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
use App\Http\Controllers\Auth\LoginController;
use App\models\Role;
use App\User;
use App\models\College;

Route::get('/', function () {
    return view('welcome2');
});

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/form',function(){
    return view('form');
 });

 Route::get ('/complaint', function () {
    return view('complaint');});

    Route::get ('/admin-view', function () {
        return view('admin-view');});
    
        // Route::get ('/admin_stud', function () {

        //     return view('admin_stud');});

            Route::get ('/admin_uni', function () {
                return view('admin_uni');});
            
                Route::get ('/admin_complaint', function () {
                return view('admin_complaint');});
    
 Route::get('/basic_response', function () {
    return 'Hello World';
 });


 Route::get('json',function(){
    return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
 });

 Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::post('/user/registration',array('uses'=>'UserRegistration@postRegister'));


Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insertuni');
// Route::post('create','StudInsertController@insert');


Route::post('approve','StudInsertController@approve');

Route::get('/appdata',function(){
    $college=College::all();
    return view('appdata', ['college' => $college]);
 });

 Route::get('college-view','StudInsertController@collegeview');
 Route::get('admin_uni','StudInsertController@adminuni');
 
//  Route::get('insertuni','StudInsertController@insertform');
//  Route::post('createuni','StudInsertController@insert'); 

 Route::get('view-records','StudInsertController@view');
 Route::get('admin_stud','StudInsertController@adminstudview');

 

Route::get('list', 'StudInsertController@list');

Route::get('edit-records','StudInsertController@update');
Route::get('edit/{id}','StudInsertController@show');
Route::post('edit/{id}','StudInsertController@edit');

Route::get('delete-records','StudInsertController@delete');
Route::get('delete/{id}','StudInsertController@destroy');
Route::get('logout','Auth\LoginController@logout');

Route::get('/validation','ValidationController@showform');
Route::post('/validation','ValidationController@validateform');


Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');


Route::get('sms','StudInsertController@send_sms');

Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');

Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');

Route::get('/foo/bar','UriController@index');

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');
Route::get('createroles',function(){
    // $owner = new Role();
    // $owner->name         = 'admin';
    // $owner->display_name = 'App admin'; // optional
    // $owner->description  = 'Admin is the root user of this app'; // optional
    // $owner->save();
    
    // $admin = new Role();
    // $admin->name         = 'viewer';
    // $admin->display_name = 'Viewer'; // optional
    // $admin->description  = 'Viewer can only read the content'; // optional
    // $admin->save();
    $user = User::where('name', '=', 'admin')->first();
    $admin=Role::where('name','=','admin')->first();
// role attach alias
    $user->attachRole($admin);
    return 'viewer and admin roles attached';

});