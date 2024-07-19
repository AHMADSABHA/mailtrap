<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//use App/Models/Email;
class Emailfactory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emails')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            
        ]);
    }
}
