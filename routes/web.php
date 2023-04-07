<?php

use App\Models\Product;
use App\Models\User;
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
    //return $products;
    
    //$user = User::find(3); //Para alterar uma informação da id selecionada
    //$user->name = 'Usuário Testera';

    
    //$user = new User();    //Para criar novo usuário
    //$user->name = 'Usuário Testera';
    //$user->email = 'email5@teste.com';
    //$user->password = bcrypt('12345678');
    //$user->save();
     

    //return User::all(); //Retorna todos os usuários.
    //return User::find(5); //Retorna apenas o usuário selecionado na ID.
    //return User::where('name','Alek Douglas')->get(); //Buscar por nome específico.

       

    

});

