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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/map','GoogleMapController@index')->name('google.map.index');
Route::post('/post','GoogleMapController@store')->name('google.map.store');

// map info dashboard Show
Route::get('/view-map/{id}','Admin\MapController@viewtMap');
Route::get('/delete-map/{id}','Admin\MapController@deleteMap');





// Front-end
Route::get('/', 'Front\FrontendController@homePage')->name('homepage');
Route::get('about-us', 'Front\FrontendController@index')->name('about');
Route::get('contact-us', 'Front\FrontendController@contactUs')->name('contact');
Route::get('consultation', 'Front\FrontendController@Consultation')->name('consultation');
Route::get('our-team', 'Front\FrontendController@ourTeam')->name('team');
Route::get('news', 'Front\FrontendController@NewsHere')->name('news');
Route::get('our-services', 'Front\FrontendController@ourService')->name('service');

// events
Route::get('/details-event/{id}', 'Front\FrontendController@detailsEvent')->name('details.event');





// Admin Route======================

// events
Route::get('/create/event', 'Admin\EventsController@addEvent')->name('createEvent');
Route::post('/store-event', 'Admin\EventsController@storeEvents')->name('store.event');
Route::get('/all-events', 'Admin\EventsController@allEvents')->name('all.event');
Route::get('/edit-event/{id}', 'Admin\EventsController@editEvent')->name('edit.event');
Route::post('/update-event', 'Admin\EventsController@updateEvent')->name('update.event');
Route::get('/delete-event/{id}', 'Admin\EventsController@deleteEvent');

// Newsletter routes
Route::get('/newsletter', 'Admin\ContactController@newLatter')->name('newsletter');
Route::post('/store-email', 'Admin\ContactController@createEmail')->name('createEmail');
Route::post('/send-email', 'Admin\ContactController@sendEmail')->name('contact.send');

// News or blog
Route::get('/create/news', 'Admin\NewsController@createNews')->name('CreateNews');
Route::post('/store-news', 'Admin\NewsController@storeNews')->name('store.news');
Route::get('/all-news', 'Admin\NewsController@allNews')->name('all.news');
Route::get('/edit-news/{id}', 'Admin\NewsController@editNews')->name('edit.news');
Route::post('/update-news', 'Admin\NewsController@updateNews')->name('update.news');
Route::get('/delete-news/{id}', 'Admin\NewsController@deleteNews');


// Our Team
Route::get('/add/team', 'Admin\TeamController@addTeam')->name('addTeam');
Route::post('/store-team', 'Admin\TeamController@storeTeam')->name('store.team');
Route::get('/all-team', 'Admin\TeamController@OurTeam')->name('ourTeam');
Route::get('/edit-team/{id}', 'Admin\TeamController@editTeam')->name('edit.team');
Route::post('/update-team', 'Admin\TeamController@updateTeam')->name('update.team');
Route::get('/delete-team/{id}', 'Admin\TeamController@deleteTeam');





//Extra routes
