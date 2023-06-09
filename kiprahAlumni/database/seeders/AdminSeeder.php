<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'email' => 'fajarmuhammadafrizal@smkwikrama.sch.id',
            'nis' => '12108415',
            'password' => bcrypt('fajaradmin')
        ]);
    }
}
