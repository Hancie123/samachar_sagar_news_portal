<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create([
            'name'=>'Suraj Yadav',
            'email'=>'suraj@gmail.com',
            'password'=>Hash::make('password'),
            'address'=>'Kathmandu',
            'phone'=>'9834564456',
            'status'=>'admin',
            'email_verified_at'=>Carbon::now()

        ]);

        $url = asset('assets/img/suraj.jpeg');
        $user->addMediaFromUrl($url)->toMediaCollection('profile');
    }
}