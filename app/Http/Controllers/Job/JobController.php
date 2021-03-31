<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs=Job::simplePaginate(8);
        return view('jobs.index',compact('jobs'));

    }



    public  function show(Job $job)
    {
         return view('jobs.show',compact('job'));
    }
}
