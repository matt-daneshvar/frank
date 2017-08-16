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
        $role = factory(\Frank\Models\Role::class)->create([
            'name' => 'project-manager',
            'display_name' => 'Project Manager',
        ]);

         $role->permissions()->sync([rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10)]);

        $role = factory(\Frank\Models\Role::class)->create([
            'name' => 'brand-rep',
            'display_name' => 'Brand Representative',
        ]);

        $role->permissions()->sync([rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10)]);

        $role = factory(\Frank\Models\Role::class)->create([
            'name' => 'developer',
            'display_name' => 'Developer',
        ]);

        $role->permissions()->sync([rand(1,10), rand(1,10), rand(1,10)]);
    }
}
