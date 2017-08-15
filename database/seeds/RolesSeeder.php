<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Frank\Models\Role::class)->create([
            'name' => 'project-manager',
            'display_name' => 'Project Manager',
        ]);

        factory(\Frank\Models\Role::class)->create([
            'name' => 'brand-rep',
            'display_name' => 'Brand Representative',
        ]);

        factory(\Frank\Models\Role::class)->create([
            'name' => 'developer',
            'display_name' => 'Developer',
        ]);
    }
}
