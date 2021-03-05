<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('/dashboard');
    }

    public function profile()
    {
        return view('settings.profile');
    }

    public function profile_save(Request $request)
    {
        echo 'saved';
    }

    public  function security()
    {
         return view('settings.security');
    }

    public function security_save()
    {
        echo  'save';
    }

    public function billing()
    {
         return view('settings.billing');
    }

    public function billing_save()
    {
        echo  'save';
    }
}
