<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// Public route (Welcome Page)
Route::get('/', function () {
    return view('welcome');
});

// Redirect authenticated users based on role

// Middleware for authenticated users
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        $user = auth()->user();

        // If role is missing, return an error
        if (!$user->role) {
            return abort(403, 'No role assigned to this user.');
        }

        // Redirect users based on their role
        return match ($user->role) {
            'admin' => redirect()->route('admin.index'),
            'teacher' => redirect()->route('teacher.index'),
            'student' => redirect()->route('student.index'),
            'parent' => redirect()->route('parent.index'),
            default => abort(403, 'Unauthorized Access - Invalid Role'),
        };
    })->name('dashboard');
});

// Define routes for different user roles
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('/teacher/dashboard', function () {
        return view('teacher.index');
    })->name('teacher.index');

    Route::get('/student/dashboard', function () {
        return view('student.index');
    })->name('student.index');

    Route::get('/parent/dashboard', function () {
        return view('parent.index');
    })->name('parent.index');
});


Route::get('teachers', function () {
    return view('admin.teachers');
});

use App\Http\Controllers\AdminController;

// Admin Dashboard

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');

// Teachers Management
Route::get('all-teachers', [AdminController::class, 'allTeachers'])->name('teachers.index');
Route::get('/addteacher', [AdminController::class, 'addTeacher'])->name('teachers.create');
Route::post('/storeteacher', [AdminController::class, 'storeTeacher'])->name('teachers.store');
Route::get('/allteachers', [AdminController::class, 'allTeachers'])->name('teachers.index');
Route::get('/teachers/{id}', [AdminController::class, 'show'])->name('teachers.show');
Route::get('/teachers/{id}/edit', [AdminController::class, 'edit'])->name('teachers.edit');
Route::put('/teachers/{id}', [AdminController::class, 'update'])->name('teachers.update');
Route::delete('/teachers/{id}', [AdminController::class, 'destroy'])->name('teachers.destroy');
