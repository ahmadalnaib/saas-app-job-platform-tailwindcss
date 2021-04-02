<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Category::factory()->create(['name'=>'job-1']);
        Category::factory()->create(['name'=>'job-2']);
        Category::factory()->create(['name'=>'job-3']);
        Category::factory()->create(['name'=>'job-4']);

        job::factory(20)->create();

    }
}
