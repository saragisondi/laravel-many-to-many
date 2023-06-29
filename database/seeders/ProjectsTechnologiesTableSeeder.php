<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Technology;

class ProjectsTechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 50 ; $i++) {

        $project = Project::inRandomOrder()->first();

        $technology_id = Technology::inRandomOrder()->first()->id;

        $project->technologies()->attach($technology_id);
        // dump($project->technologies);
      }
    }
}