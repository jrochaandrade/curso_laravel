<?php

use App\Models\Product;
use App\Models\User;
use App\Product;
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



Route::get('/model', function(){

    //$products = App\Models\Product::all();

       //$user = new \App\User();
      // $user->name = 'Usuário teste';
      // $user->name = 'email@teste.com';
      // $user->password = bcrypt('12345678');

       //return $user->save();

    //return \App\User::all();


    //return $products;

});

//Código acima deu erro não fez igual na aula