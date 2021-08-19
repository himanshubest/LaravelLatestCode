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
Route::get('/Home', 'HomeController@show');
Route::get('/si', 'Welcome@show');
Route::get('/si1', 'Welcome@show1');
Route::get('/si2', 'Welcome@show2');
Route::get('/si3', 'Welcome@show3');
Route::get('/si4', 'Welcome@show4');
Route::get('/si5', 'Welcome@show5');
Route::get('/si6', 'Welcome@show6');
Route::get('/si7', 'Welcome@show7');
Route::get('/prebtn', 'Welcome@prebtnworking');
Route::get('/welcome/Signin', 'Welcome@Signin')->name('Signin');
Route::get('/welcome/step1', 'Welcome@step1')->name('step1');
Route::get('/welcome/step2', 'Welcome@step2')->name('step2');
Route::get('/welcome/step3', 'Welcome@step3')->name('step3');
Route::get('/welcome/step4', 'Welcome@step4')->name('step4');
Route::get('/welcome/step5', 'Welcome@step5')->name('step5');
Route::get('/welcome/step6', 'Welcome@step6')->name('step6');
Route::get('/welcome/step7', 'Welcome@step7')->name('step7');
Route::get('/LoginPagesShow', 'LoginController@LoginPagesShow')->name('LoginPage');
Route::post('/LoginController/LoginDetail', 'LoginController@LoginDetail')->name('LoginDetail');
Route::get('/LoginController/VD', 'LoginController@VendorDashboard')->name('VD');
Route::get('/LoginController/Lo', 'LoginController@LogoutPage')->name('Lo');
Route::post('/ALSS', 'Add_ListingController@Add_Listing_save_data')->name('ALSS');
Route::get('/COHS', 'Add_ListingController@CreatOpenHomeShow')->name('ALSS');
Route::get('/HUR/{id}', 'Add_ListingController@HomeUserRegistraion')->name('HUR');
Route::post('/HURS', 'Add_ListingController@HomeUserRegistraionSave')->name('HURS');
Route::get('/', function () {
    return view('welcome');
});
