<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\admin;
use App\languages;
use App\news;
use App\ads;
use Illuminate\Support\Facades\Input;

class AndroidController extends Controller
{
    public function categoryview($lang_name)
    {
    	$cat = category::where('language_name','=',$lang_name)->get();
    	return response()->json($cat);
    }

    public function newsview($lang_name,$cat_id)
    {
		$news = news::select('*')
					->join('categories', 'news.category_id', '=', 'categories.category_id')
					->where('news.language_name','=',$lang_name)
    				->where('news.category_id','=',$cat_id)
					->where('news.news_status','=','1')
    				->get();
    	return response()->json($news);			
	}
	
	public function languagenews($lang_name)
    {
		$news = news::select('*')
					->join('categories', 'news.category_id', '=', 'categories.category_id')
					->where('news.language_name','=',$lang_name)
					->where('news.news_status','=','1')
    				->get();
    	return response()->json($news);			
    }

    public function advertisement()
    {
    	$adds = ads::where('ad_status','=','1')->get();
    	return response()->json($adds);
    }

    public function searchnews(Request $request)
    {
    	$data = $request->input('data');
    	$sql = news::select('*')
					->join('categories', 'news.category_id', '=', 'categories.category_id')
					->where('news.news_title','LIKE','%'.$data.'%')
					->orWhere('categories.category_name', 'LIKE','%'.$data.'%')
    				->where('news.news_status','=','1')
    				->get();
    	return response()->json($sql);
    }

	public function showPersonalizedNews($lang_name)
    {
		$news = news::select('*')
				->join('categories', 'news.category_id', '=', 'categories.category_id')
				->where('news.language_name', '=', $lang_name)
				->whereIn('news.category_id', explode(",",Input::get('category_ids')))->get();
		return response()->json($news);
	}

    public function details()
    {
        return response()->json(['user' => auth()->user()], 200);
    }

    public function OTPgenerate(Request $request)
    {
        $mobile = $request->input('mobile');
        $sql = User::where('mobile','=',$mobile)->get();
        if(count($sql)>0)
        {
            $otp=rand(1000, 9999);
            file_get_contents("http://byebyesms.com/app/smsapi/index.php?key=55D8AF57D761D2&campaign=8787&routeid=7&type=text&contacts=$mobile&senderid=MAXENH&msg=Please%20use%20this%20OTP%20for%20Login%20:%20$otp");
            return response(['otp'=>$otp, 'mobile'=>$mobile, 'type'=>'login']);
        }
        else
        {
            $otp=rand(1000, 9999);
            file_get_contents("http://byebyesms.com/app/smsapi/index.php?key=55D8AF57D761D2&campaign=8787&routeid=7&type=text&contacts=$mobile&senderid=MAXENH&msg=Please%20use%20this%20OTP%20for%20Registration%20:%20$otp");
             return response(['otp'=>$otp, 'mobile'=>$mobile, 'type'=>'register']);
        }
    }


    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->location = $request->input('location');
        $user->mobile = $request->input('mobile');
        $user->status = '1';
        if($user->save())
        {
            $accessToken = $user->createToken('authToken')->accessToken;

            $loginData = User::where('mobile','=',$request->input('mobile'))->get();

            $LoginaccessToken = $user->createToken('authToken')->accessToken;
            return response(['user'=>$user, 'access_token'=>$LoginaccessToken]);
        }
    }

    public function login(Request $request)
    {
        $mobile = $request->input('mobile');
        $loginData = User::where('mobile','=',$request->input('mobile'))
                        ->where('status','=','1')
                        ->get();
        
        if(count($loginData)>0)
        {
            $user = User::where('mobile','=',$request->input('mobile'))
                        ->where('status','=','1')
                        ->first();
            $accessToken = $user->createToken('authToken')->accessToken;
            return response(['user'=>$user, 'access_token'=>$accessToken]);
        }
        else
        {
            return response(['message'=>'Invalid credentials']);
        }
    }

    public function logout(Request $request)
    {
        $value = $request->bearerToken();
        $id= (new Parser())->parse($value)->getHeader('jti');

        $token=  DB::table('oauth_access_tokens')
            ->where('id', '=', $id)
            ->update(['revoked' => true]);

        // $this->guard()->logout();

        // $request->session()->flush();

        // $request->session()->regenerate();

        return response()->json(['message' => 'You are Logged out.']);
    }

}
