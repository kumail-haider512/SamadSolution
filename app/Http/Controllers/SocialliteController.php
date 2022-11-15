<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Socialite;
use Str;
use Auth;

class SocialliteController extends Controller
{
    public function redirectToProvider()
	{
	    return Socialite::driver('google')->redirect();
	}

	public function handleProviderCallback()
    {
    	// $url=Session::has('url')? Session::get('url'):'/';

        $get_user = Socialite::driver('google')->stateLess()->user();
        // dd($get_user);
        $user  =  User::where(['email' => $get_user->getEmail()])->first();
        // $link=$get_user->getAvatar();
        // dd($link);
        // $filename='uploads/user/profile/default.png';
        // if($link!="")
        // {
        //     try
        //     {
        //         $filename = "uploads/user/profile/".time().".jpg";
        //         file_put_contents(
        //             $filename,
        //             file_get_contents($link)
        //         );
        //     }
        //     catch (\Exception $e)
        //     {
        //         $error = $e->getMessage();
                
        //         return redirect()->route('home')->with('error','Whoops Error in your Image.');
        //     }
        // }

        if (!$user)
        {
        	// dd($get_user->getAvatar());
            $user = User::Create([
                'name'=> $get_user->getName(),
                'email'=> $get_user->getEmail(),
                'password'=> bcrypt(Str::random(8)),
                'auth_provider'=> 'google',
                'image'=> $get_user->getAvatar(),
                'username'=> $get_user->getName(),
            ]);
            Auth::login($user);

            return redirect()->route('home')->with('success','User login through google successfully');
        }
        else
        {
            Auth::login($user);
            return redirect()->route('home')->with('success','User login through google successfully');
        }

    }
}
