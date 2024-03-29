<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\MemberController;

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

Route::get('/trainer', function(){
    return view('trainer');
});

Route::get('/member', function(){
    return view('member');
});

Route::post('/createtrainer', [TrainerController::class, 'create'])->name('createtrainer');

Route::get('/memberstype', [MembershipController::class, 'memberstype'])->name('memberstype');

Route::post('createmember',[MemberController::class, 'createmember'])->name('createmember');
