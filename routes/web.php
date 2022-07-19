<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;



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

/*-------------Admin route--------*/

Route::prefix('admin')->group(function (){

    Route::get('/login',[AdminController::class, 'Index'])->name('login_form');

    Route::post('/login/owner',[AdminController::class, 'Login'])->name('admin.login');

    Route::get('/dashboard',[AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');

    Route::get('/logout',[AdminController::class, 'AdminLogout'])->name('admin.logout');

    Route::get('/profile',[AdminProfileController::class, 'AdminProfile'])->name('admin.profile');

    Route::get('/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');

    Route::post('/profile/store', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');

    Route::get('/change/password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');

    Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');

});




/*-------------End Admin route--------*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
