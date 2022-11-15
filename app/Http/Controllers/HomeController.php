<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Subcourse;
use Session;
use App\Models\Order;
use App\Models\Contactus;
use App\Models\Setting;
use App\Models\Page;
use Auth;
use App\Models\Email;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $list = Subcourse::take(6)->get();
        // dd($list);
    	return view('front.home',get_defined_vars());
    }
    public function about()
    {
    	return view('front.about');
    }
    public function cscs()
    {
    	return view('front.cscs');
    }
    public function contact()
    {
    	return view('front.contact');
    }
    public function contactSave(Request $req)
    {
        // dd($req->all());
        $req->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

            $name = $req->f_name." ".$req->l_name;
            $contact = new Contactus();
            $contact->f_name = $req->f_name;
            $contact->l_name = $req->l_name;
            $contact->email = $req->email;
            $contact->phone = $req->phone;
            $contact->message = $req->message;
            $contact->save();
            $msg = 'Your message send successfully';
        
        sendMail([
                'view' => 'emails.contact',
                'to' => 'Constructionskillstrainings@gmail.com',
                'subject' => 'Thanks for Message will contact you soon',
                'name' => 'Sammad Solutions',

                'data' => [
                    'contact_name' => $req->$name,
                    'contact_email' => $req->email,
                    'contact_phone' => $req->phone,
                    'contact_message' => $req->message,
                ]
            ]);

        return redirect()->back()->with('success',$msg);

    }
    public function terms()
    {
        return view('front.terms');
    }
    public function courses()
    {
        $list = Course::all();
        return view('front.courses',get_defined_vars());
    }
    public function subcourse($slug)
    {
        $name=str_replace('_', ' ', $slug);
        // $course = Course::findorfail($id);
        $course_name = Course::whereName($name)->first();
        if(is_null($course_name))
        {
          $course_name = Course::whereName($slug)->first();  
        }
        $list = Subcourse::where('course_id',$course_name->id)->get();
        return view('front.subcourse', get_defined_vars());
    }
    public function login()
    {
        return view('auth.login');
    }
    public function detail(Request $req,$slug=null)
    {
        $name=str_replace('_', ' ', $slug);
        if(is_null($slug))
        {
            $item = Subcourse::findorfail($req->subcourse_id);
        }
        else
        {
            if($req->course_id && $req->subcourse_id)
            {
               $item = Subcourse::findorfail($req->subcourse_id); 
            }
            else
            {
                $item = Subcourse::whereName($name)->first(); ;    
            }
        }
        
        $list = Course::all();
        return view('front.detail' , get_defined_vars());
    }
    public function getSubcourse($id)
    {
        // dd($id);
        $list = Subcourse::where('course_id',$id)->get();
        // dd($list);
        return response()->json($list);
    }
    public function checkout($id)
    {
        $item = Subcourse::findorfail($id);

        return view('front.checkout' , get_defined_vars());
    }
    public function saveCheckout(Request $req)
    {
        // dd($req->all());
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $intent=Session::get('intent_id');
        $response = $stripe->paymentIntents->capture($intent,['amount' => $req->course_price*100]);
        
        $order = new Order();
        $order->user_name = $req->user_name;
        $order->user_phone = $req->user_phone;
        $order->user_add = $req->user_add;
        $order->user_postal = $req->user_postal;
        $order->email = $req->user_email;
        $order->name = $req->course_name;
        $order->price = $req->course_price;
        $order->user_id = Auth::check() ? Auth::user()->id : null;
        $order->notes = $req->notes;
        $order->order_no = get_order_no();
        $order->save();
        if(!Auth::check())
        {
          sendMail([
                'view' => 'emails.email',
                'to' => $req->email,
                'subject' => 'Successfully buy course from Samad Solution',
                'name' => 'Samad Solution Pvt Limited',

                'data' => [
                    'course_name' => $req->course_name,
                    'course_price' => $req->course_price,
                    'order_number' => $order->order_no,
                ]
            ]); 
        }
        
        return redirect()->route('home')->with('success','Course buy successfully');
    }
    public function search(Request $req)
    {
        $search = $req->search;
        $subcourse = Subcourse::orderBy('name','asc')->where('name', 'like', '%' .$search . '%')->get();
      return response()->json($subcourse);
   }
   public function searchCourse($id)
   {
        $subcourse = Subcourse::find($id);
        return response()->json($subcourse); 
   }
   public function saveEmail(Request $req)
    {
        
        
        $email = new email();
        $email->email = $req->email;
        $email->save();
        
        sendMail([
                'view' => 'emails.contact',
                'to' => $req->email,
                'subject' => 'Thanks for Message will contact you soon',
                'name' => 'Samad Solution Pvt Limited',

                'data' => [
                    'contact_name' => $req->f_name,
                    'contact_message' => $req->message,
                ]
            ]);
        
        return redirect()->route('home')->with('success','You Subscribe Successfully to our Newsletter');
    }
    public function pages($uid,$slug)
    {
        $page=Page::whereSlug($slug)->whereUid($uid)->first();
        return view('front.index',get_defined_vars());
        
    }
    
    
}
