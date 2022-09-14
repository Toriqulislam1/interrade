<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ContentController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ClientController;



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

Route::get('/', function()
{
    return view('frontend.index');
});

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

// Admin Category All Routes 

Route::prefix('category')->group(function(){

    Route::get('/view', [CategoryController::class, 'CategoryView'])->name('all.category');

    Route::post('/store', [CategoryController::class, 'CategoryStore'])->name('category.store');

    Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');

    Route::post('/update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('category.update');

    Route::get('/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');




// all Sub Category 

Route::get('/sub/view', [SubCategoryController::class, 'SubCategoryView'])->name('all.subcategory');

Route::post('/sub/store', [SubCategoryController::class, 'SubCategoryStore'])->name('subcategory.store');

Route::get('/sub/edit/{id}', [SubCategoryController::class, 'SubCategoryEdit'])->name('subcategory.edit');

Route::get('/subcategory/ajax/{category_id}', [SubCategoryController::class, 'GetSubCategory']);

Route::post('/sub/update', [SubCategoryController::class, 'SubCategoryUpdate'])->name('subcategory.update');

Route::get('/sub/delete/{id}', [SubCategoryController::class, 'SubCategoryDelete'])->name('subcategory.delete');


    });

// Admin Content All Routes 

Route::prefix('content')->group(function(){

    Route::get('/add', [ContentController::class, 'AddContent'])->name('add-content');

    Route::post('/store', [ContentController::class, 'StoreContent'])->name('content-store');

    Route::get('/manage', [ContentController::class, 'ManageContent'])->name('manage-content');

    Route::get('/edit/{id}', [ContentController::class, 'EditContent'])->name('content.edit');

    Route::post('/data/update', [ContentController::class, 'ContentDataUpdate'])->name('content-update');

    Route::post('/thamble/update', [ContentController::class, 'ThambleImageUpdate'])->name('update-services-thamble');

    Route::get('/inactive/{id}', [ContentController::class, 'ServicesInactive'])->name('services.inactive');

    Route::get('/active/{id}', [ContentController::class, 'ServicesActive'])->name('services.active');

    Route::get('/delete/{id}', [ContentController::class, 'ServicesDelete'])->name('services.delete');

});

// Admin gallery All Routes 

Route::prefix('gallery')->group(function(){

    Route::get('/add', [GalleryController::class, 'AddGallery'])->name('add-gallery');

    Route::post('/store', [GalleryController::class, 'StoreGallery'])->name('gallery-store');

    Route::get('/manage', [GalleryController::class, 'ManageGallery'])->name('manage-gallery');

    Route::get('/edit/{id}', [GalleryController::class, 'EditGallery'])->name('gallery-edit');

    Route::post('/update', [GalleryController::class, 'GalleryUpdate'])->name('gallery-update');

    Route::get('/inactive/{id}', [GalleryController::class, 'GalleryInactive'])->name('gallery.inactive');

    Route::get('/active/{id}', [GalleryController::class, 'GalleryActive'])->name('gallery.active');

    Route::get('/delete/{id}', [GalleryController::class, 'GalleryDelete'])->name('gallery.delete');

});

// Admin Portfolio All Routes 

Route::prefix('portfolio')->group(function(){

    Route::get('/add', [PortfolioController::class, 'AddPortfolio'])->name('add-portfolio');

    Route::post('/store', [PortfolioController::class, 'StorePortfolio'])->name('portfolio-store');

    Route::get('/manage', [PortfolioController::class, 'ManagePortfolio'])->name('manage-portfolio');

    Route::get('/edit/{id}', [PortfolioController::class, 'EditPortfolio'])->name('portfolio-edit');

    Route::post('/update', [PortfolioController::class, 'PortfolioUpdate'])->name('portfolio-update');

    Route::post('/thamble/update', [ContentController::class, 'ThambleImageUpdate'])->name('update-services-thamble');

    Route::get('/inactive/{id}', [PortfolioController::class, 'PortfolioInactive'])->name('portfolio.inactive');

    Route::get('/active/{id}', [PortfolioController::class, 'PortfolioActive'])->name('portfolio.active');

    Route::get('/delete/{id}', [PortfolioController::class, 'PortfolioDelete'])->name('portfolio-delete');

});

// Admin Client All Routes 

Route::prefix('client')->group(function(){

    Route::get('/add', [ClientController::class, 'Addclient'])->name('add-client');

    Route::post('/store', [ContentController::class, 'StoreContent'])->name('content-store');

    Route::get('/manage', [ContentController::class, 'ManageContent'])->name('manage-content');

    Route::get('/edit/{id}', [ContentController::class, 'EditContent'])->name('content.edit');

    Route::post('/data/update', [ContentController::class, 'ContentDataUpdate'])->name('content-update');

    Route::post('/thamble/update', [ContentController::class, 'ThambleImageUpdate'])->name('update-services-thamble');

    Route::get('/inactive/{id}', [ContentController::class, 'ServicesInactive'])->name('services.inactive');

    Route::get('/active/{id}', [ContentController::class, 'ServicesActive'])->name('services.active');

    Route::get('/delete/{id}', [ContentController::class, 'ServicesDelete'])->name('services.delete');

});
     
     
     



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
