<?php

use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Account\Subscriptions\SubController;
use App\Http\Controllers\Account\Subscriptions\SubscriptionCancelController;
use App\Http\Controllers\Account\Subscriptions\SubscriptionCouponController;
use App\Http\Controllers\Account\Subscriptions\SubscriptionInvoiceController;
use App\Http\Controllers\Account\Subscriptions\SubscriptionResumeController;
use App\Http\Controllers\Account\Subscriptions\SubscriptionSwapController;
use App\Http\Controllers\Account\Subscriptions\SubscriptionUpdateController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Job\JobController;
use App\Http\Controllers\JobsController;
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



//sub account
Route::group(['middleware'=>['auth','verified'],'namespace'=>'Subscriptions','prefix'=>'subscriptions'],function (){
//cancel sub
    Route::get('/account.subscriptions',[SubController::class,'index'])->name('account.subscriptions');
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



//    update
    Route::get('/update',[SubscriptionUpdateController::class,'index'])->name('account.subscriptions.update');
    Route::post('/update',[SubscriptionUpdateController::class,'store'])->name('account.subscriptions.update');



//    coupon
    Route::get('/coupon',[SubscriptionCouponController::class,'index'])->name('account.subscriptions.coupon');
    Route::post('/coupon',[SubscriptionCouponController::class,'store'])->name('account.subscriptions.coupon');



//



});


//create job
    Route::get('/addjob',[JobController::class,'index'])->name('job.index');
    Route::get('/jobs/{job:slug}',[JobController::class,'show'])->name('job.show');

require __DIR__.'/auth.php';
