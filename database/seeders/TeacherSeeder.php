<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        for ($i=0;$i<3;$i++){
            $u = User::factory()->create();
            $u->attachRole('teacher');
        }
        for ($i=0;$i<3;$i++){
            $u = User::factory()->create();
            $u->attachRole('student');
        }
    }
}
