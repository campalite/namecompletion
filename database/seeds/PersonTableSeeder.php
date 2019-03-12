<?php

use Illuminate\Database\Seeder;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person')->insert([
            'name' => Str::random(10),
            'surname' => Str::random(10),
        ]);
    }
}
