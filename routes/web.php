<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
/*Route::get('/', function(){
    $input=[
        "name"=>"Test",
        "email"=>"ahmad@gmail.com",
        "body"=>"welcome in my laravel app"
    ];
    Mail::to('ahmadbot80@gmail.com')->send(new TestMail($input));
    dd('mail success');
});*/

Route::get('/',[UserController::class,'home']);

//Route::get('/home',[AuthController::class,'login'])->name('authi.view');

//Route::get('/home',[AuthController::class,'home'])->name('home.view');
Route::middleware('guest')->group(function(){
    Route::get('/login',[AuthController::class,'login'])->name('auth.view');
    Route::post('/login',[AuthController::class,'authunticate'])->name('auth.action.view');
});
Route::post('/logout',[AuthController::class,'logout'])->name('logout.view')->middleware('auth');
Route::prefix('plans')->name('plans.')->middleware('auth')->group(function () {
Route::get('/', [UserController::class, 'list'])->name('list.view');
Route::get('/create', [UserController::class, 'create'])->name('create.view');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit.view');
        Route::put('/update/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('delete');
        Route::get('/view', [UserController::class, 'view'])->name('view');
        Route::post('/import', [UserController::class, 'import'])->name('import');
        Route::get('/export', [UserController::class, 'export'])->name('export');
        Route::get('/send', [UserController::class, 'form'])->name('em');
        Route::post('/sendm', [UserController::class, 'send_emails'])->name('sm');


    });
