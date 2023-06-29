<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Import the module routes
Route::prefix('user')->group(function () {
    require_once __DIR__.'/../app/Modules/User/Routes/api.php';
});

Route::get('/', function () {
    return 'hi';
});

