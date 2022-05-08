<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZipCodeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware' => ['lang']], function () {
    Route::group([
        'prefix' => 'zip-codes',
    ], function ($router) {
        Route::get('/{zip_code}', [ZipCodeController::class, 'zipCode']);
    });
});
