<?php

use App\Http\Controllers\AdminControllers\ProjectSettingsController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin', function () {
//         return "Welcome Admin";
//     })->name('admin.dashboard');
// });

// Route::middleware(['auth', 'role:customer'])->group(function () {
//     Route::get('/customer', function () {
//         return "Welcome Customer";
//     })->name('customer.dashboard');
// });



Route::prefix('admin')->group(function () {
    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::get('/', function () {
            return view('admin.Dashboard');
        })->name('admin');

        Route::get('/profile', function () {
            return view('admin.profile');
        })->name('admin.profile');

        Route::get('/profile', function () {
            return view('admin.profile');
        })->name('admin.profile');

        Route::get('/products', function () {
            return view('admin.products');
        })->name('admin.products');

        Route::get('/product/add', function () {
            return view('admin.AddProduct');
        })->name('admin.add.products');

        Route::get('/product/edit/{id}', function () {
            return view('admin.EditProduct');
        })->name('admin.edit.products');

        Route::get('project-settings', [ProjectSettingsController::class, 'index'])->name('admin.project.settings');
        Route::post('project-settings', [ProjectSettingsController::class, 'store'])->name('admin.project.settings.store');

        Route::Resource('locations', LocationController::class);
        Route::Resource('companies', CompanyController::class);
        Route::Resource('categories', CategoryController::class);
        Route::Resource('employees', EmployeeController::class);
    });
});

Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::get('/profile', function () {
        return view('Customer.profile');
    })->name('profile');
});





Route::get('/admin/forgotPassword', function () {
    return view('admin.AuthAdmin.ForgotPassword');
})->name("admin.forgotPassword");

Route::get('/', function () {
    return view('Customer.Home');
})->name('customerHome');

require __DIR__ . '/auth.php';
