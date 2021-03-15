<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Client;
use App\Models\Post;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

/* Route::get('client/add', function(){
    DB::table('clients')->insert([
        'name' => 'Vladimir',
        'surname' => 'Putin',
        'age'=> 40
    ]);
});
*/
Route::get('client', function(){
    $client = Client::find(1);
    return $client;
});

Route::get('post/creat', function(){
DB::table('post')->insert([
    'title' => 'FirstPost',
    'body' => 'aboutfirstpost'
]);
});

Route::get('post',[BlogController::class, 'index']);

Route::get('post/create', function(){
    return view('blog.create');
    });

Route::post('post/create', [BlogController::class, 'store'])->name('add-title');