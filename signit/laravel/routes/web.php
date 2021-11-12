

<?php
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LogoutController;
Route::get('/', [WelcomeController::class, 'index']);
Route::resource('/visitors', VisitorController::class);
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::redirect('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'Register'])->name('Register');
Route::post('/register', [RegisterController::class, ''])->name('');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
