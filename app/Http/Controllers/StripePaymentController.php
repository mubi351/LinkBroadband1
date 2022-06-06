<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
class StripePaymentController extends Controller
{
    public function stripe()
    {
        return view('payment.stripe');
    }
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $value = Session::get('orderDueTotal');
         $amount_int =  ($value)*100;
        $cust_name = Session::get('customerName');
        $email = Session::get('customerEmail');
        $line1 = Session::get('Line');
        $city = Session::get('City');
        $postcode = Session::get('Postcode');
       // $abc = ['name'=> $cust_name, 'email'=>$email];
        $customer = Stripe\Customer::create(array(
            'name' => $cust_name,
           // 'description' => 'Customer desc',
            'email' => $email,
            "address" => ["city" =>$city, "country" => "UK", 
            "line1"=>$line1,"postal_code"=>$postcode,"state"=>""],
        ));
        \Stripe\Customer::createSource(
            $customer->id,
            ['source' => $request->stripeToken]
        );
        $data = Stripe\Charge::create ([
              //   "amount" => str_replace([',', '.'], ['', ''],$amount_int),
                "amount" =>  str_replace([',', '.'], ['', ''],$amount_int),
                "currency" => "gbp",
                "customer" => $customer["id"],
                "description" => "Test payment from linkbroadband.com",
            ]);
      //  echo "<pre>"; print_r($data); die();
        Session::flash('success', 'Payment successful!');      
        return back();
    }
}
