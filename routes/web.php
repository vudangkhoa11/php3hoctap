<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InforController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
// GET, POST, PUT, PATCH, DELETE (method http)
//base url:http://127.0.0.1:8000/
//http://127.0.0.1:8000/test
//Dat ten chuan SEO: 'danh-sach-san-pham'
Route::get('test', function(){
    echo '123';
});
//http://127.0.0.1:8000/
Route::get('/', function(){
    echo 'Trang chu';
});
Route::get('query-builder',[ProductController::class, 'queryBuilder']);
// Truyền dữ liệu từ Route => Controller



//ccrud bảng user
//Base-url

//http://127.0.0.1:8000/users/add-users 
//http://127.0.0.1:8000/users/update-users 
//http://127.0.0.1:8000/users/delete-users 

Route::group(['prefix'=>'users', 'as'=>'users.'],function(){
    //http://127.0.0.1:8000/users/list-users 
    Route::get('list-users', [UserController::class,'listUsers'])->name('listUsers');

    //http://127.0.0.1:8000/users/add-users 
    Route::get('add-users', [UserController::class,'addUsers'])->name('addUsers');

    Route::post('add-users', [UserController::class,'addPostUsers'])->name('addPostUsers');

    Route::get('delete-users/{idUser}', [UserController::class,'deleteUsers'])->name('deleteUsers');

});
