<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TipController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\FeedbackController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/tips', [TipController::class, 'index']);
Route::get('/tips/{id}', [TipController::class, 'show']);
Route::get('/resources', [ResourceController::class, 'index']);
Route::get('/feedback/{tip_id}', [FeedbackController::class, 'create']);
Route::post('/feedback', [FeedbackController::class, 'store']);