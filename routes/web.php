<?php

use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Account\Subscriptions\SubscriptionCancelController;
use App\Http\Controllers\Account\Subscriptions\SubscriptionInvoiceController;
use App\Http\Controllers\Account\Subscriptions\SubscriptionResumeController;
use App\Http\Controllers\Account\Subscriptions\SubscriptionSwapController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Subscriptions\PlanController;
use App\Http\Controllers\Subscriptions\SubscriptionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('home');
});

//info
Route::group(['middleware'=>['auth','verified']],function (){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/settings/profile',[DashboardController::class,'profile'])->name('profile');
    Route::post('/settings/profile',[DashboardController::class,'profile_save'])->name('profile.save');
    Route::get('/settings/security',[DashboardController::class,'security'])->name('security');
    Route::post('/settings/security',[DashboardController::class,'security_save'])->name('security.save');

});

//sub

Route::group(['middleware'=>['auth','verified']],function (){
    Route::get('/plans',[PlanController::class,'index'])->name('subscriptions.plans');

    Route::get('/subscriptions',[SubscriptionController::class,'index'])->name('subscriptions');
    Route::post('/subscriptions',[SubscriptionController::class,'store'])->name('subscriptions.store');
});

//account
Route::group(['middleware'=>['auth','verified'],'namespace'=>'Account','prefix'=>'account'],function (){

    Route::get('/',[AccountController::class,'index'])->name('account');
});

//sub account
Route::group(['middleware'=>['auth','verified'],'namespace'=>'Subscriptions','prefix'=>'subscriptions'],function (){
//cancel sub
    Route::get('/account.subscriptions',[\App\Http\Controllers\Account\Subscriptions\SubscriptionController::class,'index'])->name('account.subscriptions');
    Route::get('/cancel',[SubscriptionCancelController::class,'index'])->name('account.subscriptions.cancel');
    Route::post('/cancel',[SubscriptionCancelController::class,'store']);
//resume sub
    Route::get('/resume',[SubscriptionResumeController::class,'index'])->name('account.subscriptions.resume');
    Route::post('/resume',[SubscriptionResumeController::class,'store']);

//    invoice
    Route::get('/invoices',[SubscriptionInvoiceController::class,'index'])->name('account.subscriptions.invoices');
    Route::get('/invoices/{id}',[SubscriptionInvoiceController::class,'show'])->name('account.subscriptions.invoice');

//    swap
    Route::get('/swap',[SubscriptionSwapController::class,'index'])->name('account.subscriptions.swap');
    Route::post('/swap',[SubscriptionSwapController::class,'store'])->name('account.subscriptions.swap');
});




require __DIR__.'/auth.php';
