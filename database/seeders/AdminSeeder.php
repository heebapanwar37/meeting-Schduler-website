<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'heeba',
            'email' => 'hibapawar794@gmail.com',
            'password' =>'12313137..',
        ]);
//        Admin::create($admin);
    }
}
