<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
Use Auth;
use Str;

class UserController extends Controller
{
    public function dashboard()
    {
        $order = Order::all()->count();
    	return view('user.dashboard');
    }
     public function profile()
    {
        $user = auth()->user();
        return view('user.profile.profile', get_defined_vars());
    }

    public function generalUpdate(Request $req)
    {
        session()->forget('pass_error');
        session(['general_error' => true]);
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        session()->forget('general_error');
        
        
        $user = auth()->user();
        $user->name = $req->name;
        $user->email = $req->email;

        if($req->hasFile('image')){
            $path = "uploads/profile";
            $file = $req->image;
            $name = "image";
            $filename = time().'-'.Str::random(4).'-'.$name.'.'.$file->getClientOriginalExtension();
            $file->move($path, $filename);
            $image= $path.'/'.$filename;
            $user->image = $image;
        }
        
        $user->save();

        return redirect()->back()->with('success', 'General Info Updated Successfully');
    }

    public function passUpdate(Request $req)
    {
        session()->forget('general_error');
        session(['pass_error' => true]);
        $req->validate([
            'current_password' => 'required|password',
            'password' => 'required|min:8|confirmed',
        ]);
        session()->forget('pass_error');

        $user = auth()->user();
        $user->password = bcrypt($req->password);
        $user->save();

        return redirect()->back()->with('success', 'Password updated Successfully!');
    }
    public function orderList()
    {
    	$list = Order::where('user_id',Auth::user()->id)->get();
    	return view('user.order.list',get_defined_vars());
    }
}