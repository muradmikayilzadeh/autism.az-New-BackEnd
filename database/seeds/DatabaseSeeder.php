<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=> 'Murad',
            'surname'=> 'Mikayilzadə',
            'email'=> 'm.murad@code.edu.az',
            'password'=> 'muradmikayilzade2002'
            ]);
    }
}
