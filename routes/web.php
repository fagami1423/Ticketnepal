<?php

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

Route::get('/','PagesController@index');
Route::get('/home','PagesController@index');
Route::get('/about','PagesController@about')->name('about');
Route::get('/services','PagesController@services')->name('services');
Route::get('/contact','PagesController@contact')->name('contact');
Route::get('/reservation','PagesController@reservation')->name('reservation');
Route::get('/search','BusController@index')->name('search.buses');

Route::get('/invoice','InvoiceController@getInvoice')->name('invoice.show');


Route::get('/buses','BusController@searchBuses')->name('buses.show');
Route::post('/passengers','BusController@createPassengers')->name('passengers.create');
Route::post('/booking','BookingController@storeBooking')->name('booking.store');
Route::get('/book','BookingController@index');

Route::post('/payment','CheckoutController@store')->name('payment.store');
Route::post('/message','CheckoutController@store')->name('message.index');

Auth::routes();

Route::prefix('admin')->group(function() {
    Route::get('/','DashboardController@index')->name('admin.dashboard');

    Route::get('/login','Auth\AdminController@showLoginForm')->name('admin.create');
    Route::post('/login','Auth\AdminController@loginAdmin')->name('login.admin');

    Route::get('/bus/index','\App\Http\Controllers\Backend\BusController@index')->name('bus.index');
    Route::get('/bus/create','\App\Http\Controllers\Backend\BusController@create')->name('bus.create');
    Route::post('/bus/store','\App\Http\Controllers\Backend\BusController@store')->name('bus.store');
    Route::get('/bus/{id}/edit','\App\Http\Controllers\Backend\BusController@edit')->name('bus.edit');
    Route::get('/bus/{id}/destroy','\App\Http\Controllers\Backend\BusController@destroy')->name('bus.destroy');
    Route::resource('bus','\App\Http\Controllers\Backend\BusController',
    ['except'=>[
        'index','create','store','edit','destroy'
        ]
    ]);

    Route::get('/operator/index','\App\Http\Controllers\Backend\OperatorController@index')->name('operator.index');
    Route::get('/operator/create','\App\Http\Controllers\Backend\OperatorController@create')->name('operator.create');
    Route::post('/operator/store','\App\Http\Controllers\Backend\OperatorController@store')->name('operator.store');
    Route::get('/operator/{id}/edit','\App\Http\Controllers\Backend\OperatorController@edit')->name('operator.edit');
    Route::get('/operator/{id}/destroy','\App\Http\Controllers\Backend\OperatorController@destroy')->name('operator.destroy');
    Route::resource('operator','\App\Http\Controllers\Backend\OperatorController',
    ['except'=>[
        'index','create','store','edit','destroy'
        ]
    ]);

    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');


    Route::get('/booking','DashboardController@bookingIndex')->name('bookings.index');
    Route::get('/passenger','DashboardController@passengerIndex')->name('passenger.index');
    Route::get('/passenger/{id}/destroy','DashboardController@destroyPassenger')->name('passenger.destroy');

    Route::get('/users','DashboardController@userIndex');
    Route::get('/admins','DashboardController@adminIndex');
    Route::get('/booking/{id}/destroy','DashboardController@destroyBooking')->name('booking.destroy');
    Route::get('/user/{id}/destroy','DashboardController@destroyUser')->name('user.destroy');
    Route::get('/admin/{id}/destroy','DashboardController@destroyAdmin')->name('admin.destroy');


});
