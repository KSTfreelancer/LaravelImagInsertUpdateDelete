<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagInsertUpdateDeleteController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home',function ()  {
    return view('home');
});
route::get('test',[HomeController::class,'index']);
route::get('/image',[ImagInsertUpdateDeleteController::class,'index']);
route::get('redirectAllDataPage',[ImagInsertUpdateDeleteController::class,'ShowAllProduct']);
route::post('/image',[ImagInsertUpdateDeleteController::class,'addProduct']);
route::get('ShowAllProduct',[ImagInsertUpdateDeleteController::class,'ShowAllProduct']);
route::get('AllDataToBack',[ImagInsertUpdateDeleteController::class,'index']);
route::get('itemDelete/{id}',[ImagInsertUpdateDeleteController::class,'itemDelete']);
route::get('TargetUpdate/{id}',[ImagInsertUpdateDeleteController::class,'TargetUpdate']);
 route::post('/Update/{id}',[ImagInsertUpdateDeleteController::class,'UpdateTbl']);
// Route::post('/Update/{id}',function (Request $Request,$id)  {
//     return dd($id);
//     return dd($Request);
// });