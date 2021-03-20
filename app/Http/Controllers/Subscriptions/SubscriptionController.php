<?php

namespace App\Http\Controllers\Subscriptions;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Rules\ValidCoupon;
use Illuminate\Http\Request;
use Laravel\Cashier\Exceptions\IncompletePayment;
use Laravel\Cashier\Exceptions\PaymentActionRequired;

class SubscriptionController extends Controller
{


    public function __construct()
    {
        $this->middleware(['not.subscribed']);
    }

    public function index(Request $request)
    {
        $plan=Plan::all();
        return view('subscriptions.checkout',[
            'intent'=>$request->user()->createSetupIntent()
        ])->with('plan',$plan);
    }


    public function store(Request $request)
    {


          $this->validate($request,[
              'token'=>'required',
              'coupon'=>[
                  'nullable',
                  new ValidCoupon()
              ],
              'plan'=>'required|exists:plans,slug'
          ]);

          $plan=Plan::where('slug',$request->get('plan','monthly'))
                  ->first();

          try {


              $request->user()->newSubscription('default', $plan->stripe_id)
                  ->withCoupon($request->coupon)
                  ->create($request->token);
          }catch (PaymentActionRequired $e){
             return  redirect()->route(
               'cashier.payment',[
                   $e->payment->id,
                   'redirect'=>route('account.subscriptions')
                 ]
             );
          }

        return back()->with('status','Successfully');
    }
}
