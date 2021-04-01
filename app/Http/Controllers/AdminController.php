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
use App\tags;

class AdminController extends Controller
{
    public function adminlogin(Request $req)
    {
    	$u = $req->input('uname');
    	$p = $req->input('pass');

    	$login = admin::where('username','=',$u)
    				  ->where('password','=',$p)
    				  ->get();
    	if(count($login)>0)
    	{
    		$admin = admin::where('username','=',$u)
    				  ->where('password','=',$p)
    				  ->value('admin');
		    $auser = admin::where('username','=',$u)
		                  ->where('password','=',$p)
		                  ->value('username');
		    session()->put('admin',$admin);              
    		session()->put('auser',$auser);		  
    		return redirect('/AdminDash');
    	}		
    	else
    	{
    		echo"
    		<script>
    		alert('Invalid credentials!');
    		window.location='/KA19NEWS';
    		</script>
    		";
    	}	  
    }

    public function alogout()
    {
    	session()->forget(['admin', 'auser']);
    	session()->flush();
    	return redirect('/KA19NEWS');
    }

    public function addlangqry(Request $req)
    {
    	$lang = $req->input('lang');

    	$count = languages::where('language_name','=',$lang)->get();
    	if(count($count)>0)
    	{
    		return redirect('/AddLanguage')->with('warning','Language Already Added.');
    	}
    	else
    	{
    		$lng = new languages();
    		$lng->language_name = $lang;
    		if($lng->save())
    		{
    			 return redirect('/AddLanguage')->with('success','Data Saved Successfully');
    		}
    		else
    		{
    			return redirect('/AddLanguage')->with('error','Data Saved Failed');
    		}
    	}
    }

    public function updatelang(Request $req)
    {
    	$lgid = $req->input('lgid');
    	$lang = $req->input('language');
    	$update = languages::where('language_id','=',$lgid)->update(['language_name'=>$lang]);
    	if($update == true)
    	{
    		return redirect('/ViewLanguage')->with('success','Data Update Successfully');
    	}
    	else
    	{
    		return redirect('/ViewLanguage')->with('error','Data Update Failed');
    	}
    }

    public function dellang($lid)
    {
    	$delete = languages::where('language_id','=',$lid)->delete();
    	if($delete == true)
    	{
    		return redirect('/ViewLanguage')->with('success','Data Delete Successfully');
    	}
    	else
    	{
    		return redirect('/ViewLanguage')->with('error','Data Delete Failed');
    	}
    }

    // category insert
    public function addcatqry(Request $req)
    {
    	$cat = $req->input('cat');
    	$image = $req->file('cimage');
        $name = date('mdYHis') . uniqid() . $image->getClientOriginalName();
        $lid = $req->input('lid');
        $lname = $req->input('lnid');

        $sql = category::where('category_name','=',$cat)->get();
        if(count($sql)>0)
        {
        	return redirect('/AddCategory')->with('warning','Category already present!');
        }
        else
        {
        	$catg = new category;
	        $catg->category_name = $cat;
	        $catg->category_image = $name;
	        $catg->category_status = '1';
	        $catg->language_id = $lid;
            $catg->language_name = $lname;
	        if($catg->save())
	        {
	        	$destinationPath = 'admin/category';
	            $image->move($destinationPath, $name);
	        	return redirect('/AddCategory')->with('success','Data Saved Successfully');
	        }
	        else
	        {
	        	return redirect('/AddCategory')->with('error','Data Save Failed');
	        }
        }
    }

    public function editcatqry(Request $req)
    {
        $cat_id = $req->input('cat_id');
        $cat = $req->input('cat');
        $lid = $req->input('lid');
        $lname = $req->input('lnid');

        $update = category::where('category_id','=',$cat_id)->update(['category_name'=>$cat,'language_id'=>$lid,'language_name'=>$lname]);
        if($update == true)
        {
            return Redirect::to('/ViewCategory')->with('success', 'Data Updated');
        }
        else
        {
            return Redirect::to('/ViewCategory')->with('error', 'Data Update Failed');
        }
    }

    public function updatecat($cid)
    {
    	$lng = languages::all();
    	$cat = category::where('categories.category_id','=',$cid)
    					->join('languages','categories.language_id','languages.language_id')
						->select('languages.*','categories.*')
						->get();
		return view('Admin/editcat',compact('cat','lng'));				
    }

    public function updatecategorypic(Request $request)
    {
        $cid = $request->input('cid');
        $cat = $request->input('cat');
        $image = $request->file('photo');
        $name = date('mdYHis') . uniqid() . $image->getClientOriginalName();
        $file = $request->input('cat_img');
        $update = category::where('category_id','=',$cid)->update(['category_image'=>$name]);
        if($update == true)
        {
            $destinationPath = 'admin/category';
            $image->move($destinationPath, $name);

            $filename = public_path().'/admin/category/'.$file;
            \File::delete($filename);

            return Redirect::to('/ViewCategory')->with('success', 'Data Updated');
        }
        else
        {
            return Redirect::to('/editcat/'.$cid)->with('error', 'Data Update Failed');
        }
    }

    public function togglecat($cid,$status)
    {
    	if($status == 'enable')
    	{
    		$update = category::where('category_id','=',$cid)->update(['category_status'=>'1']);
	        if($update == true)
	        {
	            return Redirect::to('/ViewCategory')->with('success', 'Category Enabled!');
	        }
	        else
	        {
	            return Redirect::to('/ViewCategory')->with('error', 'Data Update Failed');
	        }
    	}
    	else if($status == 'disable')
    	{
    		$update = category::where('category_id','=',$cid)->update(['category_status'=>'0']);
	        if($update == true)
	        {
	            return Redirect::to('/ViewCategory')->with('success', 'Category Disabled!');
	        }
	        else
	        {
	            return Redirect::to('/ViewCategory')->with('error', 'Data Update Failed');
	        }
    	}
    }


    public function findCatID($id)
    {
    	$catg = category::where('language_id','=',$id)->get();
        return response()->json($catg);
    }

    public function findLngName($id)
    {
        $lname = languages::where('language_id','=',$id)->get();
        return response()->json($lname);
    }

    public function addnewsqry(Request $req)
    {
        try
        {
            $admin = $req->input('admin');
            $lid = $req->input('lid');
            $cid = $req->input('cat_id');
            $ntitle = $req->input('ntitle');
            $content = $req->input('content');
            $image = $req->file('image');
            $name = date('mdYHis') . uniqid() . $image->getClientOriginalName();
            $imgcap = $req->input('imgcap');
            $place = $req->input('place');
            $break = $req->input('break');

            $sql = news::where('news_title','=',$ntitle)->get();
            // $sql1 = news::where('news_content','=',$content)->get();
            if(count($sql)>0)
            {
                return redirect('/AddNews')->with('warning','Change title, already present!');
            }
            else
            {
                $cdate = date('Y-m-d');
                $ctime = date('H:i:s');

                $news = new news();
                $news->category_id = $cid;
                $news->admin_id=$admin;
                $news->language_id = $lid;
                $news->language_name = "English";
                $news->news_title=$ntitle;
                $news->news_content=$content;
                $news->news_image=$name;
                $news->news_image_caption=$imgcap;
                $news->news_place=$place;
                $news->news_breaking=$break;
                $news->news_date=$cdate;
                $news->news_time=$ctime;
                $news->news_status='1';
                if($news->save())
                {
                    $destinationPath = 'admin/news';
                    $image->move($destinationPath, $name);
                    return redirect('/AddNews')->with('success','Data Saved Successfully');
                }
                else
                {
                    return redirect('/AddNews')->with('error','Data Save Failed');
                }
            }    
        }
        catch(Exception $exception)
        {
            return view('Admin/Error')->withError($exception->getMessage())->withInput();
        }
    }

    public function updatenewspic(Request $request)
    {
        $nid = $request->input('nid');
        $cat = $request->input('cat');
        $image = $request->file('photo');
        $name = date('mdYHis') . uniqid() . $image->getClientOriginalName();
        $file = $request->input('news_img');
        $update = news::where('news_id','=',$nid)->update(['news_image'=>$name]);
        if($update == true)
        {
            $destinationPath = 'admin/news';
            $image->move($destinationPath, $name);

            $filename = public_path().'/admin/news/'.$file;
            \File::delete($filename);

            return Redirect::to('/ViewNews')->with('success', 'Data Updated');
        }
        else
        {
            return Redirect::to('/ViewNews')->with('error', 'Data Update Failed');
        }
    }

    public function editnews($nid)
    {
        $lng = languages::all();
        $cat = category::all();
        $news = news::where('news_id','=',$nid)
                    ->join('categories','news.category_id','=','categories.category_id')
                    ->join('languages','news.language_id','=','languages.language_id')
                    ->select('categories.*','languages.*','news.*')
                    ->get();
        return view('Admin/editnews',compact('news','lng','cat'));
    }

    public function updatenews(Request $request)
    {
        $nid =$request->input('nid');
        $lid =$request->input('lid');
        $cat_id =$request->input('cat_id');
        $ntitle =$request->input('ntitle');
        $content =$request->input('content');
        $place =$request->input('place');

        $update = news::where('news_id','=',$nid)->update(['category_id'=>$cat_id,'language_id'=>$lid,'news_title'=>$ntitle,'news_content'=>$content,'news_place'=>$place]); 
        if($update == true)
        {
            return Redirect::to('/ViewNews')->with('success', 'News Updated!');
        }
        else
        {
            return Redirect::to('/ViewNews')->with('error', 'Data Update Failed');
        }
    }


    public function delnews($nid)
    {
        $delete = news::where('news_id','=',$nid)->delete();
        if($delete == true)
        {
            return Redirect::to('/ViewNews')->with('success', 'News Deleted!');
        }
        else
        {
            return Redirect::to('/ViewNews')->with('error', 'Data Update Failed');
        }
    }

    public function addadvqry(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $image = $request->file('image');
        $name = date('mdYHis') . uniqid() . $image->getClientOriginalName();
        $timezone = 'ASIA/KOLKATA'; $date = new \DateTime('now', new \DateTimeZone($timezone)); 
        $adate = $date->format('Y-m-d');
        $atime = $date->format('h:i:a');
        $duration = $request->input('duration');

        $ads = new ads();
        $ads->ad_title = $title;
        $ads->ad_content = $content;
        $ads->ad_image = $name;
        $ads->ad_date = $adate;
        $ads->ad_time = $atime;
        $ads->ad_duration = $duration;
        $ads->ad_status = '1';
        if($ads->save())
        {
            $destinationPath = 'admin/advertisement';
            $image->move($destinationPath, $name);
            return redirect('/AddAdv')->with('success','Data Saved Successfully');
        }
        else
        {
            return redirect('/AddAdv')->with('error','Data Save Failed');
        }
    }


    public function addtagqry(Request $request)
    {
        $lid = $request->input('lid');
        $tag = $request->input('tag');
        $tags = new tags();
        $tags->language_id = $lid;
        $tags->tag_name = $tag;
        if($tags->save())
        {
            return redirect('/AddTag')->with('success','Data Saved Successfully');
        }
        else
        {
            return redirect('/AddTag')->with('error','Data Save Failed');
        }
    }



}
