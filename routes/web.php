<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Permissions\PermissionController;
use App\Http\Controllers\Roles\RoleController;
use App\Http\Middleware\Authenticate;


/*****   Dashboard Route   *****/
Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware(Authenticate::class);

Route::group(['prefix' => 'admin', 'middleware' => Authenticate::class], function () {

    /*****   Routes For HRM   *****/
    include __DIR__.'/modules/hr/web.php';

    /*****   Permissions Routes   *****/
    Route::get('/permission',           [PermissionController::class, 'index'])                     ->name('permission.index');
    Route::get('/permission/list/{id}', [PermissionController::class, 'list'])                      ->name('permission.list');
    Route::post('/permission',          [PermissionController::class, 'store'])                     ->name('permission.store');

    /*****   Roles Routes   *****/
    Route::get('/role',                 [RoleController::class, 'index'])                           ->name('role.index');
    Route::get('/role/list',            [RoleController::class, 'list'])                            ->name('role.list');
    Route::post('/role',                [RoleController::class, 'store'])                           ->name('role.store');
    Route::get('/role/{id}/edit',       [RoleController::class, 'edit'])                            ->name('role.edit');
    Route::put('/role/{id}',            [RoleController::class, 'update'])                          ->name('role.update');
    Route::delete('/role/{id}',         [RoleController::class, 'destroy'])                         ->name('role.destroy');
    Route::get('/role/{id}',            [RoleController::class, 'isRoleHasPermissionsOrUser'])      ->name('role.isRoleHasPermissionsOrUser');

    /*****   Users/Employees Routes   *****/
    Route::get('/user',                 [UserController::class, 'index'])                           ->name('user.index');
    Route::get('/user/list',            [UserController::class, 'list'])                            ->name('user.list');
    Route::get('/user/create',          [UserController::class, 'create'])                          ->name('user.create');
    Route::post('/user',                [UserController::class, 'store'])                           ->name('user.store');
    Route::get('/user/{id}/edit',       [UserController::class, 'edit'])                            ->name('user.edit');
    Route::put('/user/{id}',            [UserController::class, 'update'])                          ->name('user.update');
    Route::delete('/user/{id}',         [UserController::class, 'destroy'])                         ->name('user.destroy');
});
