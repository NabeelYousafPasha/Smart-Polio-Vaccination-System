<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=array([
            'name' => 'admin',
            'username' => 'admin',
            'password' =>Hash::make(123456),
            'role' =>'1'
            ]);
            foreach ($user as $users) 
            {
                DB::table('users')->insert(array($users));
            }
        }
    }
