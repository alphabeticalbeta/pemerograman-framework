<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // <-- 1. IMPORT CONTROLLER

// 2. UBAH RUTE INI
Route::get('/', [HomeController::class, 'index']);
