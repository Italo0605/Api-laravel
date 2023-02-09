<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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
    $response = Http::get('https://63e42ea98e1ed4ccf6dbe11a.mockapi.io/api/people');
    return $response->json();
});
Route::get('/create', function () { //essa rota deveria ser POST porem deixei como get poruqe não há um formulário, apenas uma rota para testar
    $response = Http::dd()->post('https://63e42ea98e1ed4ccf6dbe11a.mockapi.io/api/people');
});
