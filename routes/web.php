<?php

use App\Quotation;


use Illuminate\Support\Facades\Input;
Use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

use App\admin;
use App\languages;
use App\category;
use App\news;
use App\ads;


// HomePage Routes
Route::get('abc', function () {
	$cat = category::all();
	$news = news::all();
    return view('welcome',compact('cat','news'));
});

Route::get('/', function () {
	$cat = category::where('language_name','=','English')->get();
	$news = news::join('categories','news.category_id','=','categories.category_id')
				 ->join('languages','news.language_id','=','languages.language_id')
				 ->select('categories.*','languages.*','news.*')
				 ->orderBy('news.news_date','desc')
				 ->paginate(20);
	$rnews = news::join('categories','news.category_id','=','categories.category_id')
				 ->join('languages','news.language_id','=','languages.language_id')
				 ->select('categories.*','languages.*','news.*')
				 ->orderBy('news.news_date','desc')
				 ->take(3)
				 ->get();
	$timezone = 'ASIA/KOLKATA'; $date = new \DateTime('now', new \DateTimeZone($timezone)); 
	$currentdate = $date->format('Y-m-d');		 
	$ads = ads::whereDate('ad_duration', '>=',$currentdate)
			  ->orderBy('ad_date', 'ASC')->get();
	$breakingnews = news::where('news_breaking','=','Yes')
						->get();			
	$lng = 	languages::where('language_name','!=','English')->get();				 
    return view('home',compact('cat','news','rnews','ads','breakingnews','lng'));
});

Route::get('about_us', function () {
	$cat = category::where('language_name','=','English')->get();
	$news = news::join('categories','news.category_id','=','categories.category_id')
				 ->join('languages','news.language_id','=','languages.language_id')
				 ->select('categories.*','languages.*','news.*')
				 ->orderBy('news.news_date','desc')
				 ->paginate(20);
	$rnews = news::join('categories','news.category_id','=','categories.category_id')
				 ->join('languages','news.language_id','=','languages.language_id')
				 ->select('categories.*','languages.*','news.*')
				 ->orderBy('news.news_date','desc')
				 ->take(3)
				 ->get();
	$timezone = 'ASIA/KOLKATA'; $date = new \DateTime('now', new \DateTimeZone($timezone)); 
	$currentdate = $date->format('Y-m-d');		 
	$ads = ads::whereDate('ad_duration', '>=',$currentdate)
			  ->orderBy('ad_date', 'ASC')->get();
	$breakingnews = news::where('news_breaking','=','Yes')
						->get();			
	$lng = 	languages::where('language_name','!=','English')->get();				 
    return view('about',compact('cat','news','rnews','ads','breakingnews','lng'));
});

Route::get('writeus',function(){
	$cat = category::all();
	return view('write',compact('cat'));
});

Route::get('Advertise',function(){
	$cat = category::all();
	return view('Advertise',compact('cat'));
});

Route::get('newsdetails/{nid}','HomeController@newsdetails');
Route::get('category-news/{cid}','HomeController@categorynews');


// Admin Routes
Route::get('KA19NEWS',function() {
	return view('Admin/login');
});

Route::get('AdminDash',function() {
	if(session('admin'))
	{
		return view('Admin/dashboard');
	}
	else
	{
		return view('Admin/login');
	}
});

Route::get('AddLanguage',function() {
	if(session('admin'))
	{
		return view('Admin/addlanguage');
	}
	else
	{
		return view('Admin/login');
	}
});

Route::get('ViewLanguage',function() {
	if(session('admin'))
	{
		$lang = languages::all();
		return view('Admin/viewlanguage',compact('lang'));
	}
	else
	{
		return view('Admin/login');
	}
});

Route::get('AddCategory',function() {
	if(session('admin'))
	{
		$lng = languages::all();
		return view('Admin/addcategory',compact('lng'));
	}
	else
	{
		return view('Admin/login');
	}
});

Route::get('ViewCategory',function() {
	if(session('admin'))
	{
		$cat = category::join('languages','categories.language_id','languages.language_id')
						->select('languages.*','categories.*')
						->get();
		return view('Admin/viewcategory',compact('cat'));
	}
	else
	{
		return view('Admin/login');
	}
});

Route::get('AddNews',function() {
	if(session('admin'))
	{
		$lng = languages::all();
		$cat = category::all();
		return view('Admin/addnews',compact('lng','cat'));
	}
	else
	{
		return view('Admin/login');
	}
});


Route::get('ViewNews',function() {
	if(session('admin'))
	{
		$news = news::join('categories','news.category_id','=','categories.category_id')
					->join('languages','news.language_id','=','languages.language_id')
					->select('categories.*','languages.*','news.*')
					->get();
		return view('Admin/viewnews',compact('news'));
	}
	else
	{
		return view('Admin/login');
	}
});

Route::get('AddAdv',function() {
	if(session('admin'))
	{
		return view('Admin/AddAdv');
	}
	else
	{
		return view('Admin/login');
	}
});

Route::get('AddTag',function() {
	if(session('admin'))
	{
		$lng = languages::all();
		return view('Admin/AddTag',compact('lng'));
	}
	else
	{
		return view('Admin/login');
	}
});

Route::get('news/{lid}/{language_name}','HomeController@news');

// Route::get('blank',function() {
// 	return view('Admin/blank');
// });

Route::post('adminlogin','AdminController@adminlogin');
Route::get('alogout','AdminController@alogout');
Route::post('addlangqry','AdminController@addlangqry');
Route::post('updatelang','AdminController@updatelang');
Route::get('dellang/{lid}','AdminController@dellang');
Route::post('/addcatqry','AdminController@addcatqry');
Route::get('updatecat/{cid}','AdminController@updatecat');
Route::post('editcatqry','AdminController@editcatqry');
Route::post('updatecategorypic','AdminController@updatecategorypic');
Route::get('togglecat/{cid}/{status}','AdminController@togglecat');

// this route can return the category with the category id
Route::get('findCatID/{id}','AdminController@findCatID');

Route::get('findLngName/{id}','AdminController@findLngName');

Route::post('addnewsqry','AdminController@addnewsqry');
Route::post('updatenewspic','AdminController@updatenewspic');
Route::get('editnews/{nid}','AdminController@editnews');
Route::post('updatenews','AdminController@updatenews');
Route::get('delnews/{nid}','AdminController@delnews');

Route::post('addadvqry','AdminController@addadvqry');

Route::post('addtagqry','AdminController@addtagqry');