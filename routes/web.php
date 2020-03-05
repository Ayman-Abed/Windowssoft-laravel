<?php


use App\Category;
use App\Post;












Route::get('sitemap.xml', function () {
    
    $categories = Category::all();
    $posts = Post::all();
    
    $context = [
        'categories' => $categories,
        'posts' => $posts
    ];
    return response()->view('dashbord.sitemap', $context)->header('Content-Type', 'text/xml');
});




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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {


    // Posts
    Route::get('/posts', 'postController@index')->name('posts');

    Route::get('/posts/createPost', 'postController@create')->name('posts.createPost');
    Route::post('/posts/store', 'postController@store')->name('posts.store');

    Route::get('/posts/show/{id}', 'postController@show')->name('posts.showPostByID');
    Route::get('/posts/edit/{id}', 'postController@edit')->name('posts.edit');
    Route::post('/posts/updatePost/{id}', 'postController@update')->name('posts.updatePost');

    Route::get('/posts/destroy/{id}', 'postController@destroy')->name('posts.destroy');
    Route::get('/posts/trashed', 'postController@trashed')->name('posts.trashed');
    Route::get('/posts/restore/{id}', 'postController@restore')->name('posts.restore');
    Route::get('/posts/hdelete/{id}', 'postController@hdelete')->name('posts.hdelete');

    // Route::get("/posts/search", "postController@search")->name('posts.search');


    // category
    Route::get('/category/createCategory', 'categoryController@create')->name('category.createCategory');
    Route::get('/categories', 'categoryController@index')->name('categories');
    Route::post('/category/createCategory', 'categoryController@store')->name('category.store');
    Route::get('/category/edit/{id}', 'categoryController@edit')->name('category.edit');
    Route::post('/category/updateCategory/{id}', 'categoryController@update')->name('category.updateCategory');

    Route::get('/category/destroy/{id}', 'categoryController@destroy')->name('category.destroy');
    Route::get('/category/trashed', 'categoryController@trashed')->name('category.trashed');
    Route::get('/category/restore/{id}', 'categoryController@restore')->name('category.restore');
    Route::get('/category/hdelete/{id}', 'categoryController@hdelete')->name('category.hdelete');



    Route::get('/dashbord', 'dashbordController@index')->name('dashbord.index');
        //   for logout
        //   for logout
        
        
        
        
});
    
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/{slug}', 'UiController@showPost')->name('UI.showPost');

    Route::get('/category/{id}', 'UiController@category')->name('UI.category');

    Route::get('/', 'UiController@index')->name('index');





// for make search engine



Route::post('/search', 'UiController@search')->name('UI.searchResult');



Route::get('/{slug}/download', 'UiController@download')->name('UI.download');









