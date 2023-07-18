<?php

use App\Http\Controllers\Hq\DriverController;
use App\Http\Controllers\Hq\HqIndexController;
use App\Http\Controllers\hq\HqReportDownloadController;
use App\Http\Controllers\Ig\IndexController;
use App\Http\Controllers\Ig\PermissionController;
use App\Http\Controllers\ig\ReportDownloadController;
use App\Http\Controllers\Ig\RoleController;
use App\Http\Controllers\Ig\UserController;
use App\Http\Controllers\Ig\OffencelistController;
use App\Http\Controllers\Inspector\InspectorIndexController;
use App\Http\Controllers\Inspector\OffenceController;
use App\Http\Controllers\Inspector\ReportIndexController;
use App\Http\Controllers\Judge\JudgeIndexController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/ig', function () {
//     return view('ig.index');
// })->middleware(['auth', 'verified','role:IG']    ->name('ig.index');

Route::middleware(['auth','role:IG'])->name('ig.')->prefix('ig')->group(function(){
    Route::get('/',[IndexController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}permissions',[RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/search', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');
    Route::resource('/offence', OffencelistController::class);
    Route::get('/offence', [OffencelistController::class, 'index'])->name('offencelist.index');
    Route::get('/offence/create', [OffencelistController::class, 'create'])->name('offencelist.create');
    Route::post('/offence/create/', [OffencelistController::class, 'store'])->name('offencelist.store');
    Route::delete('/offence/{offencelist}/delete', [OffencelistController::class, 'destroy'])->name('offencelist.destroy');
    Route::get('/offence/edit/{offencelist}', [OffencelistController::class, 'edit'])->name('offencelist.edit');
    Route::put('/offence/update/{offencelist}', [OffencelistController::class, 'update'])->name('offencelist.update');
    Route::get('/reports', [ReportDownloadController::class, 'index'])->name('reports.index');
    Route::get('/reports/offences', [ReportDownloadController::class, 'downloadOffence'])->name('reports.offence');
    Route::get('/reports/offencelists', [ReportDownloadController::class, 'downloadOffencelists'])->name('reports.offencelists');
    Route::get('/reports/receipts', [ReportDownloadController::class, 'downloadReceipts'])->name('reports.receipts');
    Route::get('/reports/drivers', [ReportDownloadController::class, 'downloadDrivers'])->name('reports.drivers');
    Route::get('/reports/transactions', [ReportDownloadController::class, 'downloadTransactions'])->name('reports.transactions');
    Route::get('/reports/appeals', [ReportDownloadController::class, 'downloadAppeals'])->name('reports.appeals');



});

Route::middleware(['auth','role:HQ'])->name('hq.')->prefix('hq')->group(function(){
    Route::get('/',[HqIndexController::class, 'index'])->name('index');
    Route::get('/drivers',[DriverController::class, 'index'])->name('drivers.index');
    Route::get('/drivers/{driver}/edit',[DriverController::class, 'edit'])->name('drivers.edit');
    Route::delete('/drivers/{driver}/destroy',[DriverController::class, 'destroy'])->name('drivers.destroy');
    Route::put('/drivers/{driver}/update',[DriverController::class, 'update'])->name('drivers.update');
    Route::get('/reports', [HqReportDownloadController::class, 'index'])->name('reports.index');
    Route::get('/reports/offences', [HqReportDownloadController::class, 'downloadOffence'])->name('reports.offence');
    Route::get('/reports/offencelists', [HqReportDownloadController::class, 'downloadOffencelists'])->name('reports.offencelists');
    Route::get('/reports/receipts', [HqReportDownloadController::class, 'downloadReceipts'])->name('reports.receipts');
    Route::get('/reports/drivers', [HqReportDownloadController::class, 'downloadDrivers'])->name('reports.drivers');
    Route::get('/reports/transactions', [HqReportDownloadController::class, 'downloadTransactions'])->name('reports.transactions');

});

Route::middleware(['auth', 'role:Inspector'])->name('inspector.')->prefix('inspector')->group(function(){
    Route::get('/',[InspectorIndexController::class,'index'])->name('index');
    Route::get('/offence', [OffenceController::class, 'index'])->name('offence.index');
    Route::get('/offence/search', [OffenceController::class, 'index'])->name('offence.index.search');
    Route::get('/offence/{driver}/show', [OffenceController::class, 'show'])->name('offence.driver-show');
    Route::put('/offence/{driver}/report', [OffenceController::class, 'store'])->name('offence.driver-show.store');
    Route::get('/reports',[ReportIndexController::class,'index'])->name('reports.index');
    
    // Route::put('/offence/report/{driver}', [OffenceController::class, 'update'])->name('offence.driver-show.update');
});
    
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth','role:Judge'])->name('judge.')->prefix('judge')->group(function(){
    Route::get('/', [JudgeIndexController::class, 'index'])->name('index');
    Route::get('/{appealId}', [JudgeIndexController::class, 'show'])->name('appeal.show');
    Route::get('/{appeal_id}/edit', [JudgeIndexController::class, 'edit'])->name('appeal.edit');
    Route::put('/appeal/{appeal_id}', [JudgeIndexController::class,'update'])->name('appeal.update');



});

require __DIR__.'/auth.php';
