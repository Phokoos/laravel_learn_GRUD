<?php

use App\Models\Address;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
//    return view('welcome');
    echo "Hello";
});

Route::get('/insert', function (){
   $user = User::findOrFail(1);

   $address = new Address(["name"=>"street_test_two"]);

   $user->address()->save($address);
});

Route::get('/update', function (){
    $address = Address::whereUserId( 1)->first();

    $address->name = 'new';

    $address->save();

    return $address;
});
