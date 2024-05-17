<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SupplierLogController;
use App\Http\Controllers\BuyingController;
use App\Http\Controllers\SellingController;
use App\Http\Controllers\SuggestionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('register.index');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register');


Route::middleware('auth:sanctum')->group(function () {

    Route::resource("products", ProductController::class);
    
    Route::resource("categories", CategoryController::class);
    
    Route::resource("users", UserController::class);
    
    Route::resource("suppliers", SupplierController::class);
    
    Route::resource("permissions", PermissionController::class);
    
    Route::resource("Roles", RoleController::class);

    Route::resource("Buyings", BuyingController::class);

    Route::resource("Sellings", SellingController::class);
    
    Route::resource("Inventory", InventoryController::class);

    Route::resource("Suiggestions", SuggestionController::class);

Route::get('/home', function () {
    return view('home.index');
})->name('home');


// Rutas para el CRUD de productos
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('products.index');
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('products.create');
Route::post('/products', 'App\Http\Controllers\ProductController@store')->name('products.store');
Route::get('/products/{product}', 'App\Http\Controllers\ProductController@show')->name('products.show');
Route::get('/products/{product}/edit', 'App\Http\Controllers\ProductController@edit')->name('products.edit');
Route::put('/products/{product}', 'App\Http\Controllers\ProductController@update')->name('products.update');
Route::patch('/products/{product}', 'App\Http\Controllers\ProductController@update')->name('products.update');
Route::delete('/products/{product}', 'App\Http\Controllers\ProductController@destroy')->name('products.destroy');

// Rutas para el CRUD de categorias
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

// Rutas para el CRUD de proveedores
Route::get('/suppliers', [SupplierController::class, 'index'])->name('suppliers.index');
Route::get('/suppliers/create', [SupplierController::class, 'create'])->name('suppliers.create');
Route::get('/suppliers/{supplier}', [SupplierController::class, 'show'])->name('suppliers.show')->middleware('log.supplier.activity');
Route::get('/suppliers/{supplier}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');
Route::post('/suppliers', [SupplierController::class, 'store'])->name('suppliers.store');
Route::put('/suppliers/{supplier}', [SupplierController::class, 'update'])->name('suppliers.update')->middleware('log.supplier.activity');
Route::delete('/suppliers/{supplier}', [SupplierController::class, 'destroy'])->name('suppliers.destroy')->middleware('log.supplier.activity');

Route::get('/supplierlogs', [SupplierLogController::class, 'index'])->name('suppliersLogs.index');


// Rutas para el CRUD de usuarios
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

// Rutas para el CRUD de roles
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
Route::get('/roles/{rol}', [RoleController::class, 'show'])->name('roles.show');
Route::get('/roles/{rol}/edit', [RoleController::class, 'edit'])->name('roles.edit');
Route::put('/roles/{rol}', [RoleController::class, 'update'])->name('roles.update');
Route::delete('/roles/{rol}', [RoleController::class, 'destroy'])->name('roles.destroy');

//Rutas para las operaciones de buyings
Route::get('/buyings', [BuyingController::class, 'index'])->name('buyings.index');
Route::get('/buyings/create', [BuyingController::class, 'create'])->name('buyings.create');
Route::post('/buyings', [BuyingController::class, 'store'])->name('buyings.store');

//Rutas para las operaciones de sellings
Route::get('/sellings', [SellingController::class, 'index'])->name('sellings.index');
Route::get('/sellings/create', [SellingController::class, 'create'])->name('sellings.create');
Route::post('/sellings', [SellingController::class, 'store'])->name('sellings.store');

Route::get('/inventories', [InventoryController::class, 'index'])->name('inventories.index');
Route::get('/inventories/create', [InventoryController::class, 'create'])->name('inventories.create');
Route::post('/inventories', [InventoryController::class, 'store'])->name('inventories.store');

});