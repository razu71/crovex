<?php

use App\Http\Controllers\Calendar\CalendarController as CC;
use App\Http\Controllers\Customer\CustomerController as CMC;
use App\Http\Controllers\Driver\DriverController as DC;
use App\Http\Controllers\Menu\MenuController as MC;
use App\Http\Controllers\Order\OrderController as OC;
use App\Http\Controllers\Package\PackageController as PC;
use App\Http\Controllers\Package\PackageDayController as PDC;
use App\Http\Controllers\Disallow\DisallowController as DA;
use App\Http\Controllers\Staff\StaffController as SC;
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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('Pages.Dashboard.index');
})->name('dashboard');

Route::prefix('dashboard')->group(function () {
   // Caledar Section
   Route::resource('calendars', CC::class);

   // Menu Section
   Route::resource('menus', MC::class);
   Route::get('/menu/delete/{id}', [MC::class, "delete"])->name('menu.delete');

   // Customer Section
   Route::resource('customers', CMC::class);
   Route::get('/customer/delete/{id}', [CMC::class, "delete"])->name('customer.delete');

    // Disallow Section
    Route::resource('staff', SC::class);
    Route::get('/staff/delete/{id}', [SC::class, "delete"])->name('staff.delete');

    // Disallow Section
    Route::resource('disallow', DA::class);
    Route::get('/disallow/delete/{id}', [DA::class, "delete"])->name('disallow.delete');

   // Package Section
   Route::resource('packages', PC::class);
   Route::get('/package_type/delete/{id}', [PC::class, "delete"])->name('packagetype.delete');
   // Package Day Section
   Route::resource('package_days', PDC::class);
   Route::get('/package_days/delete/{id}', [PDC::class, "delete"])->name('package_days.delete');

   // Driver Section
   Route::resource('drivers', DC::class);
   Route::get('/driver/delete/{id}', [DC::class, "delete"])->name('driver.delete');

   // Order Section
   Route::resource('orders', OC::class);
   Route::get('/order/delete/{id}', [OC::class, "delete"])->name('order.delete');
});
