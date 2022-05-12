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
*/ /*********************star admin*************/
Route::namespace('backend')->prefix('admin')->middleware('admin')->group(function (){
    Route::get('/','HomeController@index')->name('home.page');
    /*********************star users*************/
    Route::get('/users','users@index')->name('users');
    Route::get('user/create','users@create')->name('users.create');
    Route::post('users','users@store')->name('user.store');
    Route::get('edit/{id}','users@edit')->name('users.edit');
    Route::post('user/{id}','users@update')->name('user.update');
    Route::get('user/delete/{id}','users@delete')->name('users.delete');

/*********************End users**************/

 /*********************star massage*************/
    Route::get('/contacts','message@index')->name('contacts');
    Route::get('contacts/edit/{id}','message@edit')->name('contacts.edit');
    Route::get('contacts/delete/{id}','message@delete')->name('contacts.delete');
    Route::post('replay/message/{id}','message@replay')->name('replay.message');
    /*********************End massage**************/

    /*********************star categories*************/
    Route::get('/categories','categories@index')->name('categories');
    Route::get('category/create','categories@create')->name('categories.create');
    Route::post('category','categories@store')->name('category.store');
    Route::get('/category/edit/{id}','categories@edit')->name('category.edit');
    Route::post('category/{id}','categories@update')->name('category.update');
    Route::get('categories/delete/{id}','categories@delete')->name('categories.delete');

    /*********************End categories**************/
    /*********************star skills*************/
    Route::get('/skills','skills@index')->name('skills');
    Route::get('skill/create','skills@create')->name('skills.create');
    Route::post('skill','skills@store')->name('skill.store');
    Route::get('/skill/edit/{id}','skills@edit')->name('skill.edit');
    Route::post('skill/{id}','skills@update')->name('skill.update');
    Route::get('/delete/{id}','skills@delete')->name('skills.delete');

    /*********************End skills**************/
    /*********************star tags*************/
    Route::get('/tags','tags@index')->name('tags');
    Route::get('tag/create','tags@create')->name('tags.create');
    Route::post('tag','tags@store')->name('tag.store');
    Route::get('/tag/edit/{id}','tags@edit')->name('tag.edit');
    Route::post('tag/{id}','tags@update')->name('tag.update');
    Route::get('tag/delete/{id}','tags@delete')->name('tags.delete');

    /*********************End tags**************/
    /*********************star pages*************/
    Route::get('/pages','pages@index')->name('pages');
    Route::get('/pages/create','pages@create')->name('pages.create');
    Route::post('/page','pages@store')->name('page.store');
    Route::get('/page/edit/{id}','pages@edit')->name('page.edit');
    Route::post('/page/{id}','pages@update')->name('page.update');
    Route::get('/page/delete/{id}','pages@delete')->name('pages.delete');

    /*********************End pages**************/
    /*********************star videos*************/
    Route::get('/videos','videos@index')->name('videos');
    Route::get('video/create','videos@create')->name('videos.create');
    Route::post('video','videos@store')->name('video.store');
    Route::get('/video/edit/{id}','videos@edit')->name('video.edit');
    Route::post('video/{id}','videos@update')->name('video.update');
    Route::get('video/delete/{id}','videos@delete')->name('videos.delete');

    /*********************End videos**************/
    /*********************star comment**************/

    Route::post('comment','videos@commentstore')->name('comment.store');
    Route::get('comment/{id}','videos@commentdelete')->name('comment.delete');
    Route::post('comment/{id}','videos@commentupdate')->name('comment.update');
    /*********************End comment**************/

});
/*********************End admin**************/
Route::get('/','HomeController@welcom')->name('frontend.leading');
Auth::routes();
/*********************star frontend**************/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('category/{id}', 'HomeController@category')->name('front.category');
Route::get('page/{id}/{slug}', 'HomeController@page')->name('front.page');


Route::get('skill/{id}', 'HomeController@skill')->name('front.skill');
Route::get('video/{id}', 'HomeController@video')->name('front.video');
Route::get('tag/{id}', 'HomeController@tags')->name('front.tag');
/*********************End frontend**************/
/*********************star auth**************/
/*********************star comment**************/
Route::middleware('auth')->group(function (){
    /*********************star profile**************/
    Route::get('profile/{id}/{slug}', 'HomeController@profilee')->name('front.profilee');
    Route::post('profile', 'HomeController@profileupdate')->name('profile.update');
    /*********************End profile**************/
    /*********************star comment**************/
    Route::post('comment/{id}', 'HomeController@comment')->name('front.comment');
    Route::post('comment/create/{id}', 'HomeController@commentstore')->name('front.commentstore');
/*********************End comment**************/
/*********************End auth**************/
});
/*********************star contacts**************/
Route::get('contact', 'HomeController@contact')->name('front.contact');
/*********************End contacts**************/
