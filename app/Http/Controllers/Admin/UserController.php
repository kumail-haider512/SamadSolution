<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function list()
    {
    	$list = User::where('role','!=','admin')->get();
    	return view('admin.user.list',get_defined_vars());
    }
    public function edit($id)
    {
    	$item = User::findorfail($id);
    	return view('admin.user.edit',get_defined_vars());
        return redirect()->back();
    }
    public function delete($id)
    {
        $msg = 'User delete successfully';

    	User::find($id)->delete();
        return redirect()->back()->with('error',$msg);
    }
    public function store(Request $req, $id=null)
    {

            $user = User::findorfail($id);
            $msg = 'User updated';

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();

        return redirect()->back()->with('success',$msg);
    } 
}
