<?php

use Illuminate\Http\Request;

use App\category;
use App\admin;
use App\languages;
use App\news;
use App\ads;




Route::get('categories/{lang_name}','AndroidController@categoryview');
Route::get('category_news/{lang_name}/{cat_id}','AndroidController@newsview');
Route::get('advertisement','AndroidController@advertisement');
Route::get('searchnews','AndroidController@searchnews');
Route::get('feednews/{lang_name}','AndroidController@showPersonalizedNews');
Route::get('language_news/{lang_name}', 'AndroidController@languagenews');

Route::post('otp_generate','AndroidController@OTPgenerate');
Route::post('/register','AndroidController@register');
Route::post('/login','AndroidController@login');
Route::get('logout', 'AndroidController@logout');


Route::middleware('auth:api')->group(function () {
    Route::get('user', 'AndroidController@details');

});