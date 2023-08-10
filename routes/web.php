<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/add-income', [IncomeController::class, 'AddIncome'])->name('add-income');
Route::post('/store-income', [IncomeController::class, 'store'])->name('store-income');

Route::get('/add-expense', [ExpenseController::class, 'AddExpense'])->name('add-expense');
Route::post('/store-expense', [ExpenseController::class, 'store'])->name('store-expense');

Route::get('/add-category', [CategoryController::class, 'AddCategory'])->name('add-category');
Route::post('/store-category', [CategoryController::class, 'store'])->name('store-category');
