<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Client;


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

Route::get('post/create', function(){
DB::table('post')->insert([
    'title' => 'FirstPost',
    'body' => 'aboutfirstpost'
]);
});