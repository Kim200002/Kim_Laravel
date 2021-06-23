<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\EventsController;

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
/*
Route::get('/', function()
{
   return view('welcome');
});*/

Route::get('/',function ()
{
    return view('welcome')->with('name','Kim')
        ->with('Occupation','Computer Scientist');
});
Route::get('/show','App\Http\Controllers\EventsController@index');
Route::get('/language','App\Http\Controllers\HomeController@index');
Route::get('/maps','App\Http\Controllers\MapsController@index');
Route::get('/language','App\Http\Controllers\LanguageController@index');
Route::get('/location','App\Http\Controllers\LocationsController@index');
//return View::make('welcome',Illuminate\Support\Facades\View::class,['name'=>'James']);
//Method b
//Route::get('events/{id}', 'App\Http\Controllers\EventsController@show');
//Method c
//Route::get('events/controllers/{controller}/{subcontroller}','App\Http\Controllers\EventsController@show');
//Route::get('events/{id}', 'App\Http\Controllers\EventsController@show')->name('events.show');
/*Route::get('/', 'App\Http\Controllers\WelcomeController@index');

Route::view('about','about.index')->name('about.index');
Route::view('about/book','about.book')->name('about.book');
Route::view('about/faq','about.faq')->name('about.faq');
Route::view('about/privacy','about.privacy')->name('about.privacy');
Route::view('about/tos','about.tos')->name('about.tos');

Route::view('contact','contact.index')->name('contact.index');

Route::get('events','App\Http\Controllers\EventsController@index')->name('events.index');
Route::get('events/{id}', 'App\Http\Controllers\EventsController@index')->name('events.show');
Route::get('language', 'App\Http\Controllers\LanguageController.php@index')->name('language.index');
Route::get('location', 'App\Http\Controllers\LocationController.php@index')->name('location.index');
Route::get('maps', 'App\Http\Controllers\MapsController.php@index')->name('maps.index');
Auth::routes();
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
