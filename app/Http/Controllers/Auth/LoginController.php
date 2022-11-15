<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialIdentity;
use App\Models\User;
use Socialite;
use Str;
use Auth;

class LoginController extends Controller

{
   public function redirectToProvider($provider)
   {
       
       return Socialite::driver($provider)->redirect();
   }

   public function handleProviderCallback($provider)
   {
       
       try {
           $user = Socialite::driver($provider)->stateless()->user();
       } catch (Exception $e) {
           return redirect('/login');
       }
    
       $authUser = $this->findOrCreateUser($user, $provider);
       Auth::login($authUser, true);
       return redirect()->route('user.dashboard');
   }
   
   public function findOrCreateUser($providerUser, $provider)
   {
       $account = SocialIdentity::whereProviderName($provider)
                  ->whereProviderId($providerUser->getId())
                  ->first();
        
       if ($account) 
       {
           return $account->user;
       } 
       else 
       {
           if($providerUser->getEmail() == null)
           {
               return redirect()->route('register');
           }
           $user = User::whereEmail($providerUser->getEmail())->first();
        //   dd($user);
            $link=$providerUser->getAvatar();
          $filename='uploads/user/profile/default.png';
          if($link!="")
          {
              try
              {
                  $filename = "uploads/user/profile/".time().".jpg";
                  file_put_contents(
                      $filename,
                      file_get_contents($link)
                  );
              }
              catch (\Exception $e)
              {
                  $error = $e->getMessage();
                  
                  return redirect()->route('login')->with('error','Whoops Error in your Image.');
              }
          }

           if (!$user) {
               $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name'  => $providerUser->getName(),
                    'password'=> bcrypt(\Str::random(8)),
                  'auth_provider'=> 'facebook',
                  'image'=> $filename,
                  'username'=> $providerUser->getName(),
               ]);
            
            Auth::login($user);
            return redirect()->route('user.dashboard');
           }
            else
          {
              Auth::login($user);
              return redirect()->route('user.dashboard')->with('success','User email does not exist please register');
          }
           $user->identities()->create([
               'provider_id'   => $providerUser->getId(),
               'provider_name' => $provider,
           ]);
            
           return $user;
       }
   }

}