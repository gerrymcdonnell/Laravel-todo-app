<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Task;
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

        //create a default user to login
        User::factory()->create([
        'name'=>'ged',
        'email'=>'ged@ged.com',
        'password'=>bcrypt('123456')
        ]);


        Task::factory()->create([
            'description'=>'first task sample1',
	        'user_id'=>1,
            'category_id'=>0
        ]);
    }
}
