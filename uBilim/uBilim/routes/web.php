<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});



//Route::get('/blog', function () {
//    return view('blog');
//});



Route::get('/contact', function () {
    return view('contact');
});

use App\Http\Controllers\RegistrationController;

Route::get('/register', [RegistrationController::class, 'create']);
Route::post('register', [RegistrationController::class, 'store']);

use App\Http\Controllers\SessionsController;

Route::get('/login', [SessionsController::class, 'create']);
Route::post('/login', [SessionsController::class, 'store']);
Route::get('/logout', [SessionsController::class, 'destroy']);

use App\Http\Controllers\AdminController;
Route::get('/admin', [AdminController::class, 'index']);

Route::post('/admin/add_course', [AdminController::class, 'create_course'])->name('course_create');;

Route::get('/admin/fetch_image/{id}', [AdminController::class, 'fetch_image']);

Route::get('/admin-course/{id}/edit', [AdminController::class, 'edit'])->name('admin_course_edit');

Route::put('/admin-course/{id}/update', [AdminController::class, 'update'])->name('admin_course_update');

Route::delete('/admin-course/delete/{id}', [AdminController::class, 'delete'])->name('admin_course_delete');

Route::get('/blog', [AdminController::class, 'customer_course']);

Route::get('/admin_courses', [AdminController::class, 'admin_courses'])->name("admin_courses");
Route::post('/admin/add_courses', [AdminController::class, 'add_course'])->name('course_add');;
Route::get('/admin-courses/{id}/edit', [AdminController::class, 'edit_course'])->name('admin_courses_edit');
Route::put('/admin-courses/{id}/update', [AdminController::class, 'update_course'])->name('admin_courses_update');
Route::delete('/admin-courses/delete/{id}', [AdminController::class, 'delete_course'])->name('admin_courses_delete');

Route::get('/courses',  [AdminController::class, 'customer_courses'])->name('courses');

use App\Http\Controllers\Controller;

Route::get('/get_courses/{id}',  [Controller::class, 'get_course'])->name('get_course');

Route::get('/my_courses', [Controller::class, 'show'])->name('course_show');

Route::post('/contact/submit', [AdminController:: class, 'submit'])->name('contact_form');
Route::get('/get_contacts', [AdminController::class, 'get_contacts'])->name("get_contacts");

Route::delete('/admin/contact/delete/{id}', [AdminController::class, 'delete_contact'])->name('admin_contact_delete');


Route::get('/open_course/{id}',  [AdminController::class, 'open_course'])->name('open_course');
