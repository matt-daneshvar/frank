<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Frank\Models\Project::class, 10)->create()->each(function($project)
        {
            factory(\Frank\Models\Link::class, rand(2,5))->create(['project_id' => $project->id]);

            $timeline = factory(\Frank\Models\Timeline::class)->create(['project_id' => $project->id]);
            factory(\Frank\Models\Activity::class, rand(4,10))->create(['timeline_id' => $timeline->id]);

            if($project->id <= 3)
            {
                $project->stakeholders()->attach(1, ['role_id' => rand(1,3)]);
            }
            $project->stakeholders()->syncWithoutDetaching([rand(2,5) => ['role_id' => rand(1,3)]]);
        });
    }
}
