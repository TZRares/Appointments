<?php

use App\Models\Appoint;
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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/make', function () {
    return view('make');
});

Route::get('/view', function () {
    return view('view');
});

Route::get('/created', function () {
    return view('created');
});

Route::get('/input', function () {
    return view('input');
});

Route::get('/appoints', function () {
    return view('appoints');
});

Route::post('/make', function() {
    $appoint = new Appoint();
    $appoint->name = request('name');
    $appoint->date = request('date');
    $appoint->time = request('time');
    $appoint->save();
    return redirect('/created');
});

