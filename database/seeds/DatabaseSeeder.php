<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jacob Wisniewski',
            'email' => 'jacobawisniewski.@gmail.com',
            'password' => bcrypt('secret'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);

        DB::table('employment')->insert([
            'position' => 'Lab Technician',
            'company' => 'Herman Miller',
            'start_date' => '2016-02-18',
            'user_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);

        DB::table('employment')->insert([
            'position' => 'Lab Technician',
            'company' => 'Intertek',
            'start_date' => '2014-02-19',
            'end_date' => '2016-02-15',
            'user_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tasks')->insert([
            'employment_id' => '1',
            'description' => 'Performed testing per both BIFMA and internal standards.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tasks')->insert([
            'employment_id' => '1',
            'description' => 'Modified Labview programs to better serve the Test Lab, implementing features such as IoT.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tasks')->insert([
            'employment_id' => '1',
            'description' => 'Created applications for the Test Lab with C#.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tasks')->insert([
            'employment_id' => '2',
            'description' => 'Developed custom Labview programs with an intuitive design for other lab technicians.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tasks')->insert([
            'employment_id' => '2',
            'description' => 'Learned National Instruments Labview both on my own, and with a mentor.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tasks')->insert([
            'employment_id' => '2',
            'description' => 'Worked with members from other departments on implementing 5S Quality System.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('tasks')->insert([
            'employment_id' => '2',
            'description' => 'Performed BIFMA and GSA testing.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('skills')->insert([
            'user_id' => '1',
            'skill' => 'Git',
            'level' => 'Intermediate',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('skills')->insert([
            'user_id' => '1',
            'skill' => 'SQL',
            'level' => 'Intermediate',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('skills')->insert([
            'user_id' => '1',
            'skill' => 'C#',
            'level' => 'Intermediate',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('skills')->insert([
            'user_id' => '1',
            'skill' => 'PHP',
            'level' => 'Intermediate',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('skills')->insert([
            'user_id' => '1',
            'skill' => 'MVC',
            'level' => 'Intermediate',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('skills')->insert([
            'user_id' => '1',
            'skill' => 'Unit Testing',
            'level' => 'Beginner',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('education')->insert([
            'school_name' => 'Grand Rapids Community College',
            'major' => 'Computer Information Systems',
            'degree' => 'Associates',
            'start_date' => '2016-09-01',
            'end_date' => '2018-05-02',
            'user_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
