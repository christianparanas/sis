<?php



use App\Http\Controllers\CollegeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [StudentController::class, 'index']);
    Route::get('edit/{student_number}', [StudentController::class, 'edit']);
    Route::post('store', [StudentController::class, 'store']);
    Route::post('update', [StudentController::class, 'update']);
    Route::get('delete/{delete}', [StudentController::class, 'destroy']);
    Route::get('colleges', [CollegeController::class, 'index']);
    Route::get('programs', [ProgramController::class, 'index']);
});

Route::get('login', [AuthController::class, 'getLogin'])->name('login');
Route::post('login', [AuthController::class, 'postLogin']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'getRegister']);
Route::post('register', [AuthController::class, 'postRegister']);




