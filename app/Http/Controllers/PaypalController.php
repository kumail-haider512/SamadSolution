<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Traits\PayPalPayment; //ADD NEWLY CREATED TRAIT NAMESPACE
use Session;
use Auth;

class PaypalController extends Controller
{
    use PayPalPayment; //CALL THE TRAIT IN CONTROLLER
    
    public function store(Request $request)
    {
        // dd($request->all());
        $amount = str_replace('£', '', $request->course_price);
        $paypal_amount=$amount;
        // dd($paypal_amount);
        $data = [
                'price'             => $paypal_amount,
                'payer_email'       => $request->user_email,
                'payer_name'       => $request->user_name,
                'currency'          => 'GBP',
                'quantity'          => 1,
                'description'       => $request->course_name,
                'success_url'       => route('payment.success'),
                'cancel_url'        => route('payment.cancel')
            ];
            Session::put('request',$request->all());
            return $this->paypalPaymentCheckout($data);        
    }
    
    public function success(Request $request)
    {   

         $response = $this->paypalPaymentCheckoutSuceess($request->all());

        if ($response->getState() == 'approved') 
        {
            $data=Session::get('request');
            $order = new Order();
            $order->user_name = $data['user_name'];
            $order->user_phone = $data['user_phone'];
            $order->user_add = $data['user_add'];
            $order->user_postal = $data['user_postal'];
            $order->email = $data['user_email'];
            $order->name = $data['course_name'];
            $order->price = $data['course_price'];
            $order->user_id = Auth::check() ? Auth::user()->id : null;
            $order->notes = $data['notes'];
            $order->order_no = get_order_no();
            $order->save();
        }
        return redirect()->route('index')->with('error','Payment failed! Try again later.');
    }
    
    public function cancel()
    {
        return 'You have cancelled the transaction';
    }

}