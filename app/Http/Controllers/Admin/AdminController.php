<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Course;
use App\Models\Subcourse;
use App\Models\Contactus;
use App\Models\Email;
use Str;

class AdminController extends Controller
{
    public function dashboard()
    {
        $order = Order::all()->count();
        $course = Course::all()->count();
        $subcourse = Subcourse::all()->count();
        $user = User::where('role','!=','admin')->count();
    	return view('admin.dashboard',get_defined_vars());
    }
     public function profile()
    {
        $user = auth()->user();
        return view('admin.profile.profile', get_defined_vars());
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
    	$list = Order::all();
    	return view('admin.order.list',get_defined_vars());
    }
    public function contact()
    {
        $list = Contactus::all();
        return view('admin.contact.list',get_defined_vars());
    }
    public function contactDelete($id)
    {
        Contactus::find($id)->delete();
        return redirect()->back()->with('success', 'Message deleted successfully!');

    }
    public function newsletter(Request $req)
    {
        $list = Email::all();
        return view('admin.newsletter.list',get_defined_vars());
    }
    public function newsDelete($id)
    {
        Email::find($id)->delete();
        return redirect()->back()->with('success', 'Email deleted successfully!');

    }
}
