<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function billing()
    {
        return view('settings.billing');
    }

    public function billing_save(Request $request)
    {
        $user=auth()->user();
        try {
            if($user->subscribed('default')) {
//update their credit card
                $user->updateDefaultPaymentMethod($request->payment_method);
            }else {

                $user->newSubscription(
                    'default', 'price_1IRlJeKrX08wOepqdwkJMh81'
                )->create($request->payment_method);
            }

        }catch(Exception $e) {
            return back()->with('error','Some went wrong billing info');
        }
        return back()->with('status','Successfully updated your billing info');
    }
}
