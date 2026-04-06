<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        'name'=>'Admin',
        'email'=>'Admin@gmail.com',
        'role'=>'admin',
        'password'=>'password10'
        ]);     
    }
}
