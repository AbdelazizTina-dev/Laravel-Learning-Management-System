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
        //DB::table('subjects')->delete();
        Subject::factory()->count(15)->has(Task::factory()->count(2))->create();
    }
}
