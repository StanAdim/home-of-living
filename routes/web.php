<?php

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

/*$$$$$$$$$$$$$$$$$$$$$$$$$ ADDITIONAL PAGES ROUTES $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/
Route::get('/','PagesController@getWelcome')->name('welcome');
Route::get('/about-us','PagesController@getAbout_us')->name('about');

Auth::routes();

Auth::routes();
/*################## FORUM ROUTES ######################*/
Route::get('/forum','ForumController@forumIndex')->name('forum');
Route::post('/forum/comment','ForumController@storeComment')->name('forum.comment');
Route::post('/forum/post','ForumController@storePost')->name('forum.post');
Route::get('/forum/post-create','ForumController@create')->name('forum.post-create');


/*################## SERVICE ROUTES ######################*/

/*######################## DEPARTMENT ROUTES ###########################*/
Route::get('/ict','DepartmentController@getIct')->name('ict');
Route::get('/treasury','DepartmentController@getTreasury')->name('treasury');
Route::get('/leadership','DepartmentController@getLeadership')->name('leadership');
Route::get('/projects-and-science','DepartmentController@getProjects')->name('projects');
Route::get('/home-keeping','DepartmentController@getHomeKeeping')->name('home-keeping');

/*############# USERS ROUTES ######################*/
Route::get('/home', 'HomeController@index')->name('home');
