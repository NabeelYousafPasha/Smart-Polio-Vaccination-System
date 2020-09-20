<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=array([
            'name' => 'Rawalpindi',
        ],
        [
            'name' => 'Islamabad'
            ]);
            foreach ($user as $users) 
            {
                DB::table('cities')->insert(array($users));
            }
    }
}
