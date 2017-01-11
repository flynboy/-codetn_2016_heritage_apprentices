<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
  Route::auth();
  
  /* Main Pages */
  
  Route::get('/', 'StaticPagesController@welcome');
  
  Route::get('/profile', 'StaticPagesController@profile');
  
  Route::get('/change', 'StaticPagesController@change');
  
  Route::get('/contact', 'StaticPagesController@contact');
  
  Route::get('/clubs', 'StaticPagesController@clubs');
  
  Route::get('/subjects', 'StaticPagesController@subjects');
  
  Route::get('/edit_profile', 'StaticPagesController@edit_profile');
  
  Route::post('/edit_profile', 'StaticPagesController@edit_profile_save');
  
  Route::get('/forum', 'StaticPagesController@forum');
  
  Route::get('/help', 'StaticPagesController@help');
  
  /* Forum Pages */
  
  /* algebra */
  Route::get('/forumPages/algebra', 'ForumsController@algebra');
  /* algebra cp */
  Route::get('/forumPages/algebracp', 'ForumsController@algebracp');
  /* pre cal */
  Route::get('/forumPages/pre_calculus', 'ForumsController@pre_calculus');
  /* trig */
  Route::get('/forumPages/trigonometry', 'ForumsController@trigonometry');
  /* geometry */
  Route::get('/forumPages/geometry', 'ForumsController@geometry');
  /* bridge math */
  Route::get('/forumPages/bridgemath', 'ForumsController@bridgemath');
  /* ap cal */
  Route::get('/forumPages/apcalculus', 'ForumsController@apcalculus');
  /* eng1 */
  Route::get('/forumPages/english1', 'ForumsController@english1');
  /* eng2 */
  Route::get('/forumPages/english2', 'ForumsController@english2');
  /* eng3 */
  Route::get('/forumPages/english3', 'ForumsController@english3');
  /* eng4 */
  Route::get('/forumPages/english4', 'ForumsController@english4');
  /* eng honors */
  Route::get('/forumPages/english_honors', 'ForumsController@english_honors');
  /* ap english */
  Route::get('/forumPages/ap_english', 'ForumsController@ap_english');
  /* chem */
  Route::get('/forumPages/chemistry', 'ForumsController@chemistry');
  /* physics */
  Route::get('/forumPages/physics', 'ForumsController@physics');
  /* biology */
  Route::get('/forumPages/biology', 'ForumsController@biology');
  /* env science */
  Route::get('/forumPages/environmentalscience', 'ForumsController@environmentalscience');
  /* honors chem */
  Route::get('/forumPages/honorschem', 'ForumsController@honorschem');
  /* comp apps */
  Route::get('/forumPages/computerapps', 'ForumsController@computerapps');
  /* info tech */
  Route::get('/forumPages/infotech', 'ForumsController@infotech');
  /* digital design */
  Route::get('/forumPages/dd123', 'ForumsController@dd123');
  /* web design */
  Route::get('/forumPages/wd123', 'ForumsController@wd123');
  /* programming and logic */
  Route::get('/forumPages/programmingandlogic', 'ForumsController@programmingandlogic');
  /* world history */
  Route::get('/forumPages/worldhistory', 'ForumsController@worldhistory');
  /* us history */
  Route::get('/forumPages/ushistory', 'ForumsController@ushistory');
  /* economics */
  Route::get('/forumPages/economics', 'ForumsController@economics');
  /* gov and civ */
  Route::get('/forumPages/govandciv', 'ForumsController@govandciv');
  /* bus com */
  Route::get('/forumPages/businesscom', 'ForumsController@businesscom');
  /* honors english */
  Route::get('/forumPages/honorsenglish', 'ForumsController@honorsenglish');
  /**/
  Route::get('/forumPages/humangeo', 'ForumsController@humangeo');
});
