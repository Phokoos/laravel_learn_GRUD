<?php

use App\Models\Address;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ONE TO ONE RELATIONS SHIP GRUD
|--------------------------------------------------------------------------
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

Route::get('/read', function (){
    $user = User::findOrFail(1);
    echo $user->address->name;
});

Route::get('/delete', function (){
    $user = User::findOrFail(1);
    $user->address()->delete();
    echo $user;
});

/*
|--------------------------------------------------------------------------
| !!!
|--------------------------------------------------------------------------
*/
