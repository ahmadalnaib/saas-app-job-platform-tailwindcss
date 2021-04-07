<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Job;
use http\Client\Response;
use Livewire\Component;

class CreateJob extends Component
{

    public $title;
    public $category=1;
    public $description;

    protected $rules=[
        'title'=>'required|min:4',
        'category'=>'required|integer',
        'description'=>'required|min:4'
    ];

    public function createJob()
    {
        if(auth()->check()){
            $this->validate();

            Job::create([
                'user_id'=>auth()->id(),
                'category_id'=>$this->category,
                'title'=>$this->title,
                'description'=>$this->description
        ]);
           session()->flash('success_message','Job created successfully');
           $this->reset();
           return redirect()->route('job.index');

        }
        abort(403);



    }

    public function render()
    {
        $categories=Category::all();
        return view('livewire.create-job',compact('categories'));
    }
}
