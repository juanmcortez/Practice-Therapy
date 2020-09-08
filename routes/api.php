<?php

use App\Http\Models\Patients\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'patients', 'namespace' => 'Patient'], function () {

    Route::apiResource('list', 'PatientController')->only('index');
    Route::get('list/search/{column?}/{filter?}', 'PatientController@show');

    Route::apiResource('ledger', 'LedgerController')->only('show');
});
