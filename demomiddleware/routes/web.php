<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;




Route::group(['middleware' => [
    'auth:sanctum',
    'verified',
    'accessrole',
]], function () {

    Route::get('/', function () {
        return view('auth.login');
    });

    Route::resource('producto', ProductoController::class);
});
