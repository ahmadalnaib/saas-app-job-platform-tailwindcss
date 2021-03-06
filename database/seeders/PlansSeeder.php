<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'name' => 'basic',
            'description'=>'the basic plan allows you to create 1 job '
            ]);

        DB::table('plans')->insert([
            'name' => 'plus',
            'description'=>'the plus plan allows you to create 10 jobs'
        ]);

        DB::table('plans')->insert([
            'name' => 'pro',
            'description'=>'the pro plan allows you to create 30 jobs'
        ]);
    }
}
