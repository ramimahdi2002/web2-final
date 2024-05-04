<?php

use App\Http\Controllers\CouponsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// For the coupon
Route::get('/coupon', function () {
    return view('store/dashboard/Coupons/create');
});

Route::post('/coupon', [CouponsController::class, 'addCoupon'])->name('add.coupon');


// for the list coupon


Route::get('/listcoupon/{id}', [CouponsController::class, 'listCouponIndex']);
Route::post('/listcoupon', [CouponsController::class, 'listCouponIndex'])->name('list.coupon');
// Route::get('/listcoupon/{id}', [CouponsController::class, 'listcouponStore']);
