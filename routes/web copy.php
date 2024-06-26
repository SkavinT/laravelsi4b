<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('about' , function(){
    return "Halaman About";
});
Route::get('profil' , function(){
    return view('profile');
});

// Route Dengan Parameter
Route::get('welcome/{salam}', function ($salam){
    // return 'Selamat '.$salam;
    return view('salam')->with('viewsalam' , $salam);
});

//Route tanpa parameter listdata
Route::get('listdata',function(){
    $list = ["Sistem informasi" , "Informatika" , "Manajemen"];
    $listmhs = [
        ["npm" => "001", "nama" => "ahmad"],
        ["npm" => "002", "nama" => "budi"],
    ];
    return view('listprodi')
        ->with('viewlist', $list)
        ->with('viewmhs',$listmhs);

});
Route::resource('fakultas', FakultasController::class);
Route::resource('prodi', ProdiController::class);
Route::resource('mahasiswa',MahasiswaController::class);
Route::get('dashboard' , [DashboardController::class, 'index']);