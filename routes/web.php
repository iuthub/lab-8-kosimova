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
//blog
*/Route::get('/', function () {
    return view('partials/header');
});
Route::get('/post/1', function () {
    return'blah';
});
Route::get('/post/2', function () {
    return 'jsdcsj';
});

Route::get('/post/3', function () {
    return 'kjsdbcfhsf';
});



//other 
Route::get('/about', function () {
return view('other/about');
});



//admin
Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
 
Route::get('/', ['as' => 'index', function () {
        return view('admin/index');
                }]);
Route::get('/edit/12', ['as' => 'edit', function () {
        return view('admin/edit');
             }]);
Route::get('/create', ['as' => 'create', function () {
        return view('admin/create');
                 }]);
    });
Route::get('about', function () {
        return view('other/about');
    });
//jsdhfusdkg
Route :: post ('create ', function ( \ Illuminate \ Http \ Request $request ,
\ Illuminate \ Validation \ Factory $validator ) {
$validation = $validator -> make ( $request -> all (), [
'title ' => 'required | min :5 ',
'content ' => 'required |min :10 '
]);
if ( $validation -> fails ()) {
return redirect ()-> back ()-> withErrors ( $validation );
}
return redirect ()
->route ('admin . index ')
->with ('info ', 'Post created , Title : ' . $request -> input ('title '));
})-> name ('admin . create ');
//Post

Route :: post ('edit ', function (\ Illuminate \ Http \ Request $request ,
\ Illuminate \ Validation \ Factory $validator ) {
$validation = $validator -> make ( $request -> all (), [
'title ' => 'required | min :5 ',
'content ' => 'required |min :10 '
]);
if ( $validation -> fails ()) {
return redirect ()-> back ()-> withErrors ( $validation );
}
return redirect ()
->route ('admin . index ')
->with ('info ', 'Post edited , new Title : ' . $request -> input ('title '));
})-> name ('admin . update ');

//
Route :: group ([ 'prefix ' => 'admin '], function () {
Route :: get ('', [
'uses ' => ' PostController@getAdminIndex ',
'as ' => 'admin . index '
]);
Route :: get ('create ', [
'uses ' => ' PostController@getAdminCreate ',
'as ' => 'admin . create '
]);
Route :: post ('create ', [
'uses ' => ' PostController@postAdminCreate ',
'as ' => 'admin . create '
]);
Route :: get ('edit /{ id}', [
'uses ' => ' PostController@getAdminEdit ',
'as ' => 'admin . edit '
]);
Route :: post ('edit ', [
'uses ' => ' PostController@postAdminUpdate ',
'as ' => 'admin . update '
]);
});
//
Route :: get ('/', [
'uses ' => ' PostController@getIndex ',
'as ' => 'blog . index '
]);
Route :: get ('post /{ id}', [
'uses ' => ' PostController@getPost ',
'as ' => 'blog . post '
]);
//
