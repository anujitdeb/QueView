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
    return view('welcome');
});

Route::get('/dashboard_old', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard_old');

//Route::get('dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
//Route::get('queview', [\App\Http\Controllers\DashboardController::class, 'index'])->name('queview');

Route::group(['prefix' => 'dashboard'], function () {

    // Dashboard Controllers
    Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('question-view{questionId}', [\App\Http\Controllers\DashboardController::class, 'questionView'])->name('question-view');
    Route::get('solution-view{questionId}', [\App\Http\Controllers\DashboardController::class, 'solutionView'])->name('solution-view');
    Route::get('search', [\App\Http\Controllers\DashboardController::class, 'search'])->name('search');
    Route::get('all-questions', [\App\Http\Controllers\DashboardController::class, 'allQuestion'])->name('all-questions');

    //User Login
    Route::post('user-login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'login'])->name('user-login');

    // Admin Controllers
    Route::get('question-request-view', [\App\Http\Controllers\AdminsController::class, 'questionRequestView'])->name('question-request-view');
    Route::get('question-approval{id}', [\App\Http\Controllers\AdminsController::class, 'questionApproval'])->name('question-approval');
    Route::get('question-disapproval{id}', [\App\Http\Controllers\AdminsController::class, 'questionDisapproval'])->name('question-disapproval');


    Route::resource('roles', 'App\Http\Controllers\RolesController', ['names' => 'dashboard.roles']);
    Route::resource('users', 'App\Http\Controllers\UsersController', ['names' => 'dashboard.users']);
    Route::resource('admins', 'App\Http\Controllers\AdminsController', ['names' => 'dashboard.admins']);

    Route::get('/login', 'App\Http\Controllers\AdminAuth\AuthenticatedSessionController@showLoginForm')->name('dashboard.login');
    Route::post('/login/submit', 'App\Http\Controllers\AdminAuth\AuthenticatedSessionController@login')->name('dashboard.login.submit');

    Route::post('/logout/submit', 'App\Http\Controllers\AdminAuth\AuthenticatedSessionController@logout')->name('dashboard.logout.submit');

    // Route::get('/password/reset', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('dashboard.login');
    // Route::post('/login/submit', 'App\Http\Controllers\Auth\LoginController@login')->name('dashboard.login.submit');


    //User Controllers
    Route::resource('question-upload', '\App\Http\Controllers\QuestionUploadController');
    Route::get('question-upload-status', [\App\Http\Controllers\QuestionUploadController::class, 'questionStatusView'])->name('question-upload-status');
    Route::get('my-uploads', [\App\Http\Controllers\QuestionUploadController::class, 'myUploads'])->name('my-uploads');
    Route::get('add-bookmark{question_id}', [\App\Http\Controllers\BookmarkController::class, 'addBookmark'])->name('add-bookmark');
    Route::get('my-bookmark', [\App\Http\Controllers\BookmarkController::class, 'index'])->name('my-bookmark');
});

require __DIR__ . '/auth.php';
