<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index(){
        $jobs=Job::all();
     return view('jobs',compact('jobs'));
    }

    public function show($id, Job $job)
    {
        return view('jobs.show',compact('job'));
    }
}
