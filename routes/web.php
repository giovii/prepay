<?php

use App\Http\Controllers\Admin\AdvisorController;
use App\Http\Controllers\Admin\AmbassadorController;
use App\Http\Controllers\Admin\ExtraBonuController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqQuestionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ManualBonuController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductTagController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WalletController;
use App\Http\Controllers\Auth\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*Route::redirect('/', '/login');*/

Route::view('/', 'welcome');
Route::view('/aboutus', 'aboutus');
Route::view('/howitworks', 'howitworks');
Route::view('/opportunities', 'opportunities');
Route::view('/workwithus', 'workwithus');




Auth::routes(['register' => true]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth','admin']], function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit', 'show']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::post('users/csv', [UserController::class, 'csvStore'])->name('users.csv.store');
    Route::put('users/csv', [UserController::class, 'csvUpdate'])->name('users.csv.update');
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Product Category
    Route::post('product-categories/media', [ProductCategoryController::class, 'storeMedia'])->name('product-categories.storeMedia');
    Route::resource('product-categories', ProductCategoryController::class, ['except' => ['store', 'update', 'destroy']]);

    // Product Tag
    Route::resource('product-tags', ProductTagController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit', 'show']]);

    // Product
    Route::post('products/media', [ProductController::class, 'storeMedia'])->name('products.storeMedia');
    Route::post('products/csv', [ProductController::class, 'csvStore'])->name('products.csv.store');
    Route::put('products/csv', [ProductController::class, 'csvUpdate'])->name('products.csv.update');
    Route::resource('products', ProductController::class, ['except' => ['store', 'update', 'destroy']]);

    // Faq Category
    Route::resource('faq-categories', FaqCategoryController::class, ['except' => ['store', 'update', 'destroy']]);

    // Faq Question
    Route::resource('faq-questions', FaqQuestionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Manual Bonus
    Route::resource('manual-bonus', ManualBonuController::class, ['except' => ['store', 'update', 'destroy']]);

    // Extra Bonus
    Route::resource('extra-bonus', ExtraBonuController::class, ['except' => ['store', 'update', 'destroy']]);

    // Transactions
    Route::post('transactions/csv', [TransactionController::class, 'csvStore'])->name('transactions.csv.store');
    Route::put('transactions/csv', [TransactionController::class, 'csvUpdate'])->name('transactions.csv.update');
    Route::resource('transactions', TransactionController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit']]);

    // Wallet
    Route::resource('wallets', WalletController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit']]);

    // Ambassador
    Route::resource('ambassadors', AmbassadorController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit']]);

    // Advisor
    Route::resource('advisors', AdvisorController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit']]);
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});


Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'User', 'middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
});
