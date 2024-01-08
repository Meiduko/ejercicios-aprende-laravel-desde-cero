<?php

use App\Http\Controllers\ejercicio3Controller;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelIgnition\Support\StringComparator;

use function PHPSTORM_META\type;

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

// Ejercicio 1

Route::get('/ejercicio1', function () {
    return "GET OK";
});

Route::post('/ejercicio1', function () {
    return "POST OK";
});

Route::put('/ejercicio1', function () {
    return "PUT OK";
});

Route::patch('/ejercicio1', function () {
    return "PATCH OK";
});

Route::delete('/ejercicio1', function () {
    return "DELETE OK";
});

Route::post('/ejercicio2/a', function(Request $request) {
    return Response::json([
        'name' => $request->get('name'),
        'description' => $request->get('description'),
        'price' => $request->get('price')
        ]
    );
});

Route::post('/ejercicio2/b', function(Request $request) {
    if($request->get('price') < 0){
        return
        Response::json(["message" => "Price can't be less than 0"], 422);
    }
    return Response::json([
        'name' => $request->get('name'),
        'description' => $request->get('description'),
        'price' => $request->get('price')
        ]
    );
});

Route::post('/ejercicio2/c', function(Request $request) {
    $price = $request->get('price');
    $discount_code = ($request->get('discount'));
    if ($discount_code == 'SAVE5'){
        $discount = 5;
    }elseif($discount_code == 'SAVE10'){
        $discount = 10;
    }elseif($discount_code == 'SAVE15'){
        $discount = 15;
    }else{
        $discount = 0;
    }
    $price = $price-$price*($discount/100);
    return Response::json([
        'name' => $request->get('name'),
        'description' => $request->get('description'),
        'price' => $price,
        'discount' => $discount
        ]
    );
});

Route::post('/ejercicio3',[ejercicio3Controller::class, 'store'])->name('ejercicio3.store');
