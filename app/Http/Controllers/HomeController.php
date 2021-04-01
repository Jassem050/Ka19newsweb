<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quotation;


use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\category;
use App\admin;
use App\languages;
use App\news;
use App\ads;

class HomeController extends Controller
{
    public function newsdetails($mid)
    {
    	$news = news::where('news_id','=',$mid)->get();
    	$cat = category::where('language_name','=','English')->get();
    	$timezone = 'ASIA/KOLKATA'; $date = new \DateTime('now', new \DateTimeZone($timezone)); 
		$currentdate = $date->format('Y-m-d');		 
		$ads = ads::whereDate('ad_duration', '>=',$currentdate)
				  ->orderBy('ad_date', 'ASC')->get();
		$breakingnews = news::where('news_breaking','=','Yes')
							->get();			
		$lng = 	languages::where('language_name','!=','English')->get();	
    	return view('news-details',compact('news','cat','ads','breakingnews','lng'));
    }

    public function categorynews($cid)
    {
    	$news = news::where('news.category_id','=',$cid)
    			->join('categories','news.category_id','=','categories.category_id')
				->join('languages','news.language_id','=','languages.language_id')
				->select('categories.*','languages.*','news.*')
				->orderBy('news.news_date','desc')
				->paginate(15);
    	$cat = category::where('language_name','=','English')->get();
    	$timezone = 'ASIA/KOLKATA'; $date = new \DateTime('now', new \DateTimeZone($timezone)); 
		$currentdate = $date->format('Y-m-d');		 
		$ads = ads::whereDate('ad_duration', '>=',$currentdate)
				  ->orderBy('ad_date', 'ASC')->get();
		$breakingnews = news::where('news_breaking','=','Yes')
							->get();			
		$lng = 	languages::where('language_name','!=','English')->get();	
    	return view('category-news',compact('news','cat','ads','breakingnews','lng'));
    }

    public function news($lid,$language_name)
    {
    	$news = news::where('news.language_id','=',$lid)
    			->join('categories','news.category_id','=','categories.category_id')
				->join('languages','news.language_id','=','languages.language_id')
				->select('categories.*','languages.*','news.*')
				->orderBy('news.news_date','desc')
				->paginate(15);
    	$cat = category::where('language_id','=',$lid)->get();
    	$timezone = 'ASIA/KOLKATA'; $date = new \DateTime('now', new \DateTimeZone($timezone)); 
		$currentdate = $date->format('Y-m-d');		 
		$ads = ads::whereDate('ad_duration', '>=',$currentdate)
				  ->orderBy('ad_date', 'ASC')->get();
		$breakingnews = news::where('news_breaking','=','Yes')
							->get();			
		$lng = 	languages::where('language_name','!=','English')->get();	
    	return view('news',compact('news','cat','ads','breakingnews','lng'));
    }


}
