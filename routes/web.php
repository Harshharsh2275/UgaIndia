<?php

use Facade\FlareClient\View;
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

Route::get('/blogs','Blogs\showBlogsController@basic_show_blog');

Route::get('/blogs/{id}', 'Blogs\postBlogController@fetch_blog');

Route::get('admin/blog/create',function (){
    return view('admin.blogs.create');
})->middleware('vAv');

// Authentication Routes
Route::get('admin/auth/login', 'Auth\LoginController@showLoginFormAdmins')->name('loginAdminlink');
Route::post('admin/auth/login', 'Auth\LoginController@Adminlogin')->name('loginAdmin');
Route::get('admin/auth/logout', 'Auth\LoginController@admin_logout')->name('logoutAdmin');
// Registration Routes
Route::get('admin/auth/register', 'Auth\RegisterController@showAdminRegisterForm')->name('registerAdminlink');
Route::post('admin/auth/register', 'Auth\RegisterController@RegisterAdmin')->name('registerAdmin');

//Blog Create route
Route::post('admin/blog/create', 'Admin\blogs\blogCreateController@create_blog');

//blog show images
Route::prefix('image')->group(function () {
    Route::get('blogs/{image}','Blogs\postBlogController@show_blog_image')->name('blog_image');
});

//blog search route get
Route::get('search','Blogs\searchBlogController@search');

