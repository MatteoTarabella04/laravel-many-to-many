<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $project = new Project();

            $project->name = $faker->sentence(3);
            $project->slug = Str::slug($project->name, '-');
            $project->description = $faker->paragraphs(asText: true);
            $project->start_date = $faker->date();
            $project->finish_date = $faker->date();
            $project->git_hub_link = $faker->url();
            $project->page_link = $faker->url();
            $project->save();
        }
    }
}