<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topics;

class TopicsSeeder extends Seeder
{
    public function run(): Void
    {
        Topics::create(["name" => "Other"]);
        Topics::create(["name" => "Work"]);
        Topics::create(["name" => "Sport"]);
        Topics::create(["name" => "Urgent"]);
    }
}
