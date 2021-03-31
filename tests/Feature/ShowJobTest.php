<?php

namespace Tests\Feature;

use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ShowJobTest extends TestCase
{
   use RefreshDatabase;





    public function test_single_job_shows_correctly_on_the_show_page()
    {

        $job=Job::factory()->create([
            'title'=>'job one',
            'description'=>'one',
        ]);

        $response=$this->get(route('job.show',$job));

        $response->assertSuccessful();
        $response->assertSee($job->title);
        $response->assertSee($job->description);


    }


    public function test_all_jobs_shows_correctly_on_the_add_job_page()
    {

        $job=Job::factory()->create([
            'title'=>'job one',
            'description'=>'one',
        ]);

        $response=$this->get(route('job.index'));

        $response->assertSuccessful();
        $response->assertSee($job->title);
        $response->assertSee($job->description);


    }
}
