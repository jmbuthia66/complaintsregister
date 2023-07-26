<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	Role::create(['name'=>'Administrator']);
    	Role::create(['name'=>'CSO']);
    	Role::create(['name'=>'Assignee']);
        Role::create(['name'=>'CSM']);
        Role::create(['name'=>'Finance Supervisor']);
        // \App\Models\User::factory(10)->create();
    }
}
