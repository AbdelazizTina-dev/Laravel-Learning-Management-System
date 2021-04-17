<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        $u1 = User::create([
                'name' => 'Albert Einstein',
                'email' => 'albert.e@gmail.com',
                'password' => Hash::make('qwerty07')
        ]);
        $u1->attachRole('teacher');

        $u2 = User::create([
                'name' => 'Nikola Tesla',
                'email' => 'nikola.t@gmail.com',
                'password' => Hash::make('qwerty12')
        ]);
        $u2->attachRole('teacher');

        $u3 = User::create([
                'name' => 'Thomas Edison',
                'email' => 'thomas.e@gmail.com',
                'password' => Hash::make('qwerty54')
        ]);
        $u3->attachRole('teacher');
    }
}
