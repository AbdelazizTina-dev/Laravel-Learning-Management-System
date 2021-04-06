<?php

namespace Database\Seeders;

use App\Models\Solution;
use App\Models\Subject;
use App\Models\Task;
use Carbon\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->delete();
        Subject::factory()->count(10)->has(Task::factory()->count(3)->has(Solution::factory()->count(4)))->create();
    }
}
