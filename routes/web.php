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
    $response = Http::get('https://dummy.restapiexample.com/api/v1/employees');
    $employers = $response->offsetGet("data");
    foreach ($employers as $employee) {
        echo $employee["id"]. "\n<br>";
        echo $employee["employee_name"]. "\n<br><br>";
    }
});
