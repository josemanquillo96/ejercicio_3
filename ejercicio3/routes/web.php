<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('viajero/listar',[TravelerController::class,'listar'])->name('traveler.listar');//primero coloco la direccion; cambia el controllador  y donde va EL NAME coloco en nombre del conrolador y despues va la funcion  
Route::get('viajero/create',[TravelerController::class,'create'])->name('traveler.create');
Route::post('viajero/store', [TravelerController::class,'store'])->name('traveler.store');
Route::get('viajero/{traveler}', [TravelerController::class, 'show'])->name('traveler.show');
Route::put('viajero/{traveler}',[TravelerController::class,'update'])->name('traveler.update');
Route::get('viajero/{traveler}/editar',[TravelerController::class,'edit'])->name('traveler.edit');//dentro de esa llaves va en singular 
Route::delete('viajero/{traveler}',[TravelerController::class,'destroy'])->name('traveler.destroy');
Route::get('viaje/listar',[TravelController::class,'listar'])->name('travel.listar');  
Route::get('viaje/create',[TravelController::class,'create'])->name('travel.create');
Route::post('viaje/store', [TravelController::class,'store'])->name('travel.store');
Route::get('viaje/{travel}', [TravelController::class, 'show'])->name('travel.show');
Route::put('viaje/{travel}',[TravelController::class,'update'])->name('travel.update');
Route::get('viaje/{travel}/editar',[TravelController::class,'edit'])->name('travel.edit');
Route::delete('viaje/{travel}',[TravelController::class,'destroy'])->name('travel.destroy');