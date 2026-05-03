<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// AUTH
Route::get('/login', [AuthController::class, 'showLogin']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);

//yang lain
Route::get('/admin', function () {
    return view('admin.dashboard'); // resources/views/admin/dashboard.blade.php
});

Route::get('/user', function () {
    return view('users.home'); // resources/views/user/home.blade.php
});

Route::get('/mekanik', function () {
    return view('mekanik.dashboard'); // resources/views/mekanik/dashboard.blade.php
});


