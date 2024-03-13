<?php

use App\Http\Controllers\Apps\AlbumManagementController;
use App\Http\Controllers\Apps\BoxSettingController;
use App\Http\Controllers\Apps\CurrencyChangeController;
use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\UserManagementController;
use App\Http\Controllers\Apps\ProfilePageController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Apps\GroupManagementController;
use App\Http\Controllers\Apps\MediaManagementController;
use App\Http\Controllers\Apps\NewsManagementController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::name('user-management.')->group(function () {
        Route::resource('/user-management/users', UserManagementController::class);
        Route::resource('/user-management/roles', RoleManagementController::class);
        Route::resource('/user-management/permissions', PermissionManagementController::class);
    });
    //Route for User Management
    Route::get('user-management',[UserManagementController::class, 'index'])->name('user-management.index');
    Route::get('user-management/add',[UserManagementController::class, 'add'])->name('user-management.add');
    Route::get('user-management/view',[UserManagementController::class, 'show'])->name('user-management.view');
    Route::get('user-management/edit',[UserManagementController::class, 'edit'])->name('user-management.edit');
    Route::get('user-management/viewGroup',[UserManagementController::class, 'viewGroup'])->name('user-management.viewGroup');
    //Route for Group Management
    Route::get('group-management',[GroupManagementController::class, 'index'])->name('group-management.index');
    Route::get('group-management/add',[GroupManagementController::class, 'add'])->name('group-management.add');
    Route::get('group-management/view',[GroupManagementController::class, 'view'])->name('group-management.view');
    Route::get('group-management/edit',[GroupManagementController::class, 'edit'])->name('group-management.edit');
    Route::get('group-management/subscriber',[GroupManagementController::class, 'subscriber'])->name('group-management.subscriber');
    Route::get('group-management/assignSubscriber',[GroupManagementController::class, 'assignSubscriber'])->name('group-management.assignSubscriber');
    //Route for Album Management
    Route::get('album-management',[AlbumManagementController::class, 'index'])->name('album-management.index');
    Route::get('album-management/edit',[AlbumManagementController::class, 'edit'])->name('album-management.edit');
    Route::get('album-management/add',[AlbumManagementController::class, 'add'])->name('album-management.add');
    // Route for Media Management
    Route::get('media-management',[MediaManagementController::class, 'index'])->name('media-management.index');
    Route::get('media-management/add',[MediaManagementController::class, 'add'])->name('media-management.add');
    Route::get('media-management/edit',[MediaManagementController::class, 'edit'])->name('media-management.edit');
    // Route for Box Setting
    Route::get('box-setting',[BoxSettingController::class, 'index'])->name('box-setting.index');
    Route::get('box-setting/add',[BoxSettingController::class, 'add'])->name('box-setting.add');
    Route::get('box-setting/view',[BoxSettingController::class, 'view'])->name('box-setting.view');
    Route::get('box-setting/edit',[BoxSettingController::class, 'edit'])->name('box-setting.edit');
    // Route for News Managment
    Route::get('news-management',[NewsManagementController::class, 'index'])->name('news-management.index');
    Route::get('news-management/add',[NewsManagementController::class, 'add'])->name('news-management.add');
    Route::get('news-management/view',[NewsManagementController::class, 'view'])->name('news-management.view');
    Route::get('news-management/edit',[NewsManagementController::class, 'edit'])->name('news-management.edit');
    //Route for Currency Change
    Route::get('currency-change',[CurrencyChangeController::class, 'index'])->name('currency-change.index');
    Route::get('currency-change/add',[CurrencyChangeController::class, 'add'])->name('currency-change.add');
    Route::get('currency-change/edit',[CurrencyChangeController::class, 'edit'])->name('currency-change.edit');

    // Route::get('/profile-view/{id}', [ProfilePageController::class, 'index'])->name('profile-view');

});

Route::get('/error', function () {
    abort(500);
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';



