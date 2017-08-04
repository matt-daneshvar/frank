<?php

use Frank\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create(['name' => 'Pending Payment']);
        Status::create(['name' => 'Work in Progress']);
        Status::create(['name' => 'Live']);
        Status::create(['name' => 'Complete']);
    }
}
