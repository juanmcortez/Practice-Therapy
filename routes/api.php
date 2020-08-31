<?php

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

Route::get('patients/list', function () {
    $tmppatient = [
        ['pid' => 0, 'p_name' => 'Cortéz, Juan M.', 'p_dob' => '1980 - 04 - 08', 'p_extpid' => 156849],
        ['pid' => 1, 'p_name' => 'Carnizzaro, Vanesa A.', 'p_dob' => '1984 - 04 - 13', 'p_extpid' => 156851],
        ['pid' => 2, 'p_name' => 'Cortéz Carnizzaro, María T.', 'p_dob' => '2009 - 09 - 26', 'p_extpid' => 156855],
    ];
    return json_encode($tmppatient);
});
