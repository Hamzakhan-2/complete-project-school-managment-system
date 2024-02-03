<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */

     public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('teachers')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'password' => bcrypt('password123'),
                'date_of_joining' => $faker->dateTimeThisDecade,
                'phone_number' => $faker->numberBetween(100000000000000, 999999999999999),
                'address' => $faker->address,
                'work_experience' => $faker->randomDigit,
                'qualification' => $faker->randomElement(['Bachelor\'s Degree', 'Master\'s Degree']),
                'status' => $faker->randomElement(['Active', 'Inactive']),
                'profile_picture' => $faker->imageUrl(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}


