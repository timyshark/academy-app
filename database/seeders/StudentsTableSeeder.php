<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Student::truncate();

        $faker = \Faker\Factory::create();
 
        Student::create([
            'first_name' => 'Timy',
            'last_name' => 'Shark',
            'email' => 'timy.shark@outlook.com',
            'picturePath' => "assets/images/timy.png",
            'gender' => 'M',
            'isActive' => 0,
            'dob' => '2020-11-20',
            'school' => 'NONE',
        ]);
        for ($i = 0; $i < 50; $i++) {
            $rnd = $faker->randomDigit % 3;
            switch ($rnd) {
                case 0:
                    $first_name = $faker->firstNameMale;
                    $last_name = $faker->lastName;
                    $pictureName = "mark";
                    $school = 'UBC';
                    $gender = 'M';
                    break;
                case 1:
                    $first_name = $faker->firstNameMale;
                    $last_name = $faker->lastName;
                    $pictureName = "john";
                    $gender = 'B';
                    $school = 'SFU';
                    break;
                case 2:
                    $first_name = $faker->firstNameFemale;
                    $last_name = $faker->lastName;
                    $pictureName = "mary";
                    $gender = 'F';
                    $school = 'BCIT';
                    break;
            }
            Student::create([
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $faker->unique()->safeEmail,
                'picturePath' => "assets/images/$pictureName.png",
                'gender' => $gender,
                'isActive' => $rnd,
                'dob' => $faker->date,
                'school' => $school,

            ]);
        }     
    }
}
