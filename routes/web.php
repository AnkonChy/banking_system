<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('users',[UserController::class,'create']);
Route::post('users',[UserController::class,'store']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/', [UserController::class, 'showTransactionsAndBalance']);
Route::get('/deposit', [UserController::class, 'showDeposits']);
Route::post('/deposit', [UserController::class, 'deposit']);
Route::get('/withdrawal', [UserController::class, 'showWithdrawals']);
Route::post('/withdrawal', [UserController::class, 'withdraw']);