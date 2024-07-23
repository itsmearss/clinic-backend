<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'annuriyadhus17@gmail.com',
            'phone' => '1234567890',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);

        // seeder profile_clinics manual
        \App\Models\ProfileClinic::create([
            'name' => 'Klinik Sehat',
            'address' => 'Jl. Raya Kedungwaringin No. 1',
            'phone' => '1234567890',
            'website' => 'https://kliniksehat.com',
            'email' => 'annurriyadhus17@gmail.com',
            'doctor_name' => 'Dr. Annur Riyadhus Shalihin',
            'unique_code' => 'KLNKSHAT',
        ]);

        // seeder doctors auto
        \App\Models\Doctor::factory(10)->create();

        // auto generate doctor schedule
        $this->call(DoctorScheduleSeeder::class);

    }
}
