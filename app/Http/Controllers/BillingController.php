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
            $user->newSubscription(
                'default', 'price_1IRlJeKrX08wOepqdwkJMh81'
            )->create($request->payment_method);

        }catch(Exception $e) {
            return back()->with('status','Some went wrong billing info');
        }
        return back()->with('status','Successfully updated your billing info');
    }
}
