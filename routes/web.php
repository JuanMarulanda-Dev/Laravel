<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dasboard', "DasboardController@index");

Route::resource('/expense_report','ExpenseReportController');

Route::get('/expense_report/{id}/confirmDelete', "ExpenseReportController@confirmDelete");

Route::resource('/expense', 'ExpenseController');

Route::get('/expense_report/{id}/confirmSendEmail','ExpenseReportController@confirmSendEmail');

Route::post('/expense_report/{id}/sendEmail','ExpenseReportController@sendEmail');

Route::get('/expense_report/{expenseReport}/expense/create', 'ExpenseController@create');

Route::post('/expense_report/{expenseReport}/expense', 'ExpenseController@store');