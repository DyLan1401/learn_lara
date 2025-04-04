<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\HtmlController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    Route::controller(SocialiteController::class)->group(function () {
    Route::get('auth/google','googleLogin')->name('auth.google');
Route::get('auth/google-callback','googleAuthenication')->name('auth.google-callback');
});

Route::get('/login1', [HtmlController::class, 'login']);
Route::get('/register', [HtmlController::class, 'register']);
Route::get('/list1', [HtmlController::class, 'list']);
Route::get('/update1', [HtmlController::class, 'update']);
Route::get('/view', [HtmlController::class, 'view']);



Route::get('/login1', function () {
    return file_get_contents(public_path('EXE/EXE1/public/login.html'));
});

Route::get('/register', function () {
    return file_get_contents(public_path('EXE/EXE1/public/register.html'));
});

Route::get('/list1', function () {
    return file_get_contents(public_path('EXE/EXE1/public/list.html'));
});

Route::get('/update1', function () {
    return file_get_contents(public_path('EXE/EXE1/public/update.html'));
});

Route::get('/view', function () {
    return file_get_contents(public_path('EXE/EXE1/public/view.html'));
});

Route::get('dashboard', [CrudUserController::class, 'dashboard']);

Route::get('login', [CrudUserController::class, 'login'])->name('login');
Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

Route::get('create', [CrudUserController::class, 'createUser'])->name('user.createUser');
Route::post('create', [CrudUserController::class, 'postUser'])->name('user.postUser');

Route::get('read', [CrudUserController::class, 'readUser'])->name('user.readUser');

Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');

Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');
Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');

Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

Route::get('/', function () {
    return view('welcome');
    
});