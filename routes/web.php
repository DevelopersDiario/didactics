<?php
use GuzzleHttp\Client;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/
/*Route::get('/', function () {
$title='Didatic';
$user='benja';
   return view('welcome',[
   	'title'=>$title,
   	'user'=>$user]);
});*/
/*Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('about', function()
{
    return View::make('pages.about');
});
Route::get('projects', function()
{
    return View::make('pages.projects');
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});*/
/*
*/
/*Route::get ('/','PostController@publicaciones');

Route::get ('/','Posthome@index');*/


Auth::routes();
Route::get('/', function () {
 return view('welcome');
});
Route::get('about', function()
{
    return View::make('pages.about');
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});

Route::get('proyectos', function()
{
    return View::make('pages.proyectos');
});
Route::get('servicios', function()
{
    return View::make('pages.servicios');
});






//Route::get('/home', 'HomeController@index')->name('home');


