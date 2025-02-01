<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/students', [StudentsController::class,'store'])->name('store');
Route::get('/studentsTable', [StudentsController::class,'show'])->name('show');
Route::post('/updateStudentsPage/{students}/edit', [StudentsController::class, 'edit'])->name('edit');
Route::delete('/studentsTable/{students}/delete', [StudentsController::class,'delete'])->name('delete');
Route::put('/studentsTable', [StudentsController::class,'update'])->name('update');

