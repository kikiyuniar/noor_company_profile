<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Msg_Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileControler;

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
    return view('page_view.index');
});
Route::get('/about', [PostController::class,'about']);
Route::get('/project',[PostController::class, 'view_project_front']);
Route::get('/blog',[PostController::class, 'view_blog_front']);
// Route::get('/blog', function () {
//     return view('page_view.blog');
// });
Route::get('/contact', function () {
    return view('page_view.contact');
});
Route::get('/bussiness', function () {
    return view('page_view.bussiness');
});
Route::get('/login', function () {
    return view('home.login');
});

Route::get('/baca/{slug_judul}',[ListController::class, 'baca_blog']);

Route::post('login', [LoginController::class, 'login'])->name('login');
    //     return view('page_view.blog');
    // });
    Route::get('/contact', function () {
        return view('page_view.contact');
    });
    Route::get('/bussiness', function () {
        return view('page_view.bussiness');
    });
    Route::get('/login', function () {
        return view('home.login');
    });
    
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('/detail_blog',[ListController::class, 'detail_blogs']); 

Route::group(['middleware' => 'auth'], function() {
    Route::get('/visi_misi',[ListController::class, 'view_visi_misi']);
    Route::get('/exp_team',[ListController::class, 'view_team']);
    Route::get('/update_tampilan_project',[ListController::class, 'update_view_project']);
    Route::post('/update_visi',[PostController::class, 'update_visi']);
    Route::post('/update_misi',[PostController::class, 'update_misi']);
    Route::post('/update_project',[PostController::class,'update_project']);
    Route::post('/add_msg',[Msg_Controller::class, 'add_msg']);
    Route::get('/view_msg',[Msg_Controller::class, 'view_msg']);
    Route::post('/read_msg',[Msg_Controller::class, 'read_msg']);
    Route::post('/insert_postproject',[PostController::class, 'post_project']);
    Route::post('/insert_postabout',[PostController::class, 'post_about']);
    Route::post('/insert_postalbum',[PostController::class, 'post_album']);
    Route::post('/insert_postproject',[PostController::class, 'post_project']);
    Route::post('/add_exp_team',[PostController::class, 'exp_team']);
    Route::get('/view_post',[ListController::class, 'list_project']);
    Route::get('/view_edit_team',[ListController::class, 'view_edit_team']);
    Route::get('/lihat_project',[ListController::class, 'view_project']);
    Route::get('/hapus_project/{id}',[DeleteController::class, 'detele_project']);
    Route::get('/delete_account/{id}',[DeleteController::class, 'detele_account']);
    Route::get('/delete_album/{id}',[DeleteController::class, 'detele_album']);
    Route::get('/del_exp_team/{id}',[DeleteController::class, 'del_exp_team']);
    Route::get('/post_about',[PostController::class, 'view_about']);
    Route::post('/user_add',[AccountController::class, 'add_account']);
    Route::get('/account',[AccountController::class, 'view_account']);
    Route::post('/update_status',[AccountController::class, 'update_user_status']);
    Route::post('/update_team',[PostController::class, 'update_team']);
    Route::get('/view_album',[PostController::class, 'view_album']);
    Route::get('/profile',[ProfileControler::class, 'view_profile']);
    Route::post('/profile_update',[ProfileControler::class, 'profile_update']);
    Route::post('/update_foto_profile',[ProfileControler::class, 'update_foto_profile']);
    Route::post('/update_about_gambar',[PostController::class, 'update_about_gambar']);
    Route::get('/post_project', function () {return view('page_layout.form_postproject');});
    Route::get('/post_album', function () {return view('page_layout.form_postalbum');});
    Route::get('/dashboard', function () {return view('page_layout.dashboard');});
    Route::post('/insert_postproject',[PostController::class, 'post_project']);
    Route::post('/insert_postabout',[PostController::class, 'post_about']);
    Route::post('/insert_postalbum',[PostController::class, 'post_album']);
    Route::post('/insert_postproject',[PostController::class, 'post_project']);
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/view_edit_blog',[ListController::class, 'view_edit_blog']);
    Route::post('/update_blog',[PostController::class, 'update_blog']);
    Route::get('/del_blog/{id}',[DeleteController::class, 'del_blog']);
    Route::get('/add_blog', function () {return view('page_layout.form_blog');});
    Route::get('/view_blog',[PostController::class, 'view_blog']);
    Route::post('/proses_add_blog',[PostController::class, 'add_blog']);

   
});