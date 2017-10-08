<?php

Route::get('/','WelcomeController@index');

Route::get('/category','WelcomeController@category');

Route::get('/mcategory','WelcomeController@mcategory');

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

//Route::get('/', function () {
//    //return view('welcome');
//    return 'hello world';
//});
//
//Route::get('/bitm', function (){
//   return view('demo');
//});
//
//Route::get('/basis/bitm/php65',function (){
//    //return view('basis.bitm.php65.hello');
//    return [
//        'name'=>'Alamin',
//        'city'=>'Dhaka',
//        'country'=>'Bangladesh'
//    ];
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
