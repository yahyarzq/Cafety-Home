<?php

use App\Http\Controllers\AboutsController;
use App\Http\Controllers\CoffesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DessertsController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\FoodsController;
use App\Http\Controllers\HomepagesController;
use App\Http\Controllers\MessagesController;
use App\Models\Homepages;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('welcome');
});

*/

Route::resource('homepages', HomepagesController::class);
Route::resource('abouts', AboutsController::class);
Route::resource('contacts', ContactsController::class);
Route::resource('desserts', DessertsController::class);
Route::resource('messages', MessagesController::class);
Route::resource('faqs', FaqsController::class);
Route::resource('foods', FoodsController::class);
Route::resource('coffes', CoffesController::class);


Route::get('/admin', function () {
    $homepages = DB::table('homepages')->get();

    $cofeetotal = DB::table('coffes')->count();
    $foodstotal = DB::table('foods')->count();
    $dessertstotal = DB::table('desserts')->count();

    return view('admin',['homepages'=> $homepages,'cofeetotal'=> $cofeetotal,'foodstotal'=> $foodstotal,'dessertstotal'=> $dessertstotal]);
})->name('admin.index');









Route::get('/about', function () {
    $abouts = DB::table('abouts')->get();
    $homepages = DB::table('homepages')->get();
    return view('mainpage/about',['abouts' => $abouts,'homepages' => $homepages]);
})->name('about.index');

Route::get('/contact', function () {
    $contacts = DB::table('contacts')->get();
    $faqs = DB::table('faqs')->get();
    $homepages = DB::table('homepages')->get();
    return view('mainpage/contact',['contacts' => $contacts,'faqs' => $faqs,'homepages' => $homepages]);
    
})->name('contact.index');


Route::get('/', function () {
    $homepages = DB::table('homepages')->get();
    $coffes = DB::table('coffes')->get();
    $desserts = DB::table('desserts')->get();
    $foods = DB::table('foods')->get();
    return view('mainpage/index', ['homepages' => $homepages,'coffes' => $coffes,'desserts' => $desserts,'foods' => $foods,]);
});

Route::get('/', function () {
    $homepages = DB::table('homepages')->get();

    return view('mainpage/layout/master', ['homepages' => $homepages]);
});
