<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bestinvitators;
use App\Http\Controllers\lottorydata;
use App\Http\Controllers\vinners;
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




Route::get('/bestinvitators', [bestinvitators::class, 'index']);
Route::get('/lottorydata', [lottorydata::class, 'index']);
Route::get('/vinners', [vinners::class, 'index']);