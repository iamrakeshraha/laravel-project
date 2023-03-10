<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

use App\Models\Customers;
use App\Models\registration;

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

Route::get('register',[RegistrationController::class, 'index']);        // '/' sign not mendatory for routes
Route::post('register',
[RegistrationController::class, 'register'],
//  function(){
//     $registration= Registration::all();
//     echo "<pre>";
//     print_r($registration->toArray());
// }
);

Route::get('dashboard',[RegistrationController::class, 'dashboard']);

Route::get('customers', function () {
   $customers = Customers::all();
   echo "<pre>";
   print_r($customers->toArray());
});
