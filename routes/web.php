<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesdocController;
use App\Http\Controllers\PagesadminController;


Route::get('/', [PagesController::class,'home']);

// ############################### login ############################### //
    Route::get('/logindoc', [PagesController::class,'logindoc']);
    Route::get('/loginadmin', [PagesController::class,'loginadmin']);

// ############################### DOCTOR ############################## //
    Route::get('/indexdoc', [PagesdocController::class,'indexdoc']);
    Route::get('/profiledoc', [PagesdocController::class,'profiledoc']);

// ############################### ADMIN ############################### //
    Route::get('/indexadmin', [PagesadminController::class,'indexadmin']);
    Route::get('/managepatient', [PagesadminController::class,'managepatient']);
    Route::get('/patientdetails/{id}', [PagesadminController::class,'patientdetails']);
    Route::get('/addpatient', [PagesadminController::class,'addpatient']);
    Route::get('/deletepatient/{id}', [PagesadminController::class,'deletepatient']);
    Route::get('/updatepatient/{id}', [PagesadminController::class,'updatepatient']);
    
    Route::post('/savepatient', [PagesadminController::class,'savepatient']);//c'est un post car c'est un formulaire
    Route::post('/editpatient/{id}', [PagesadminController::class,'editpatient'])->name('editpatient');



/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
*/