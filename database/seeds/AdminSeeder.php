<?php

use App\Models\Admin;
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
            'name' => 'Hussain Saad',
            'email' => 'hs07it@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
