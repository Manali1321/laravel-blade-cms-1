<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Qualification;
use App\Models\Experience;
use App\Models\Blog;
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

        User::truncate();
        Project::truncate();
        Qualification::truncate();
        Experience::truncate();
        Blog::truncate();
        Skill::truncate();

        User::factory()->count(2)->create();
        Skill::factory()->count(3)->create();
        Qualification::factory()->count(4)->create();
        Experience::factory()->count(4)->create();
        Blog::factory()->count(4)->create();

        Project::factory()->count(4)->create()->each(function ($project) {
            $skills = Skill::all()->random(rand(1, 2))->pluck('id');
            $project->skills()->attach($skills);
        });


    }
}