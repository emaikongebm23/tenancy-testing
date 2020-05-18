<?php

use App\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Tenancy\Hooks\Database\Events\Drivers\Created;

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

Route::resource('customers','CustomerController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
