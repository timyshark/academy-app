<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

use Illuminate\Database\Eloquent\Factories\Sequence;

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

       \App\Models\Student::factory(10)->create();

 
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



       $students = Student::factory(50)
        ->count(50)
        ->state(new Sequence(
            ['gender' => 'M'],
            ['gender' => 'F'],
        ))->state(new Sequence(
            ['school' => 'UBC'],
            ['school' => 'SFU'],
            ['school' => 'BCIT']
        ))->state(new Sequence(
            ['picturePath' => 'assets/images/male1.png'],
            ['picturePath' => 'assets/images/male2.png'],
            ['picturePath' => 'assets/images/female1.png']
        ))->state(new Sequence(
            ['isActive' => 0],
            ['isActive' => 1]
        ))
        ->create();

        // $faker = \Faker\Factory::create();
        // for ($i = 0; $i < 50; $i++) {
        //     $rnd = $faker->randomDigit % 3;
        //     switch ($rnd) {
        //         case 0:
        //             $first_name = $faker->firstNameMale;
        //             $last_name = $faker->lastName;
        //             $pictureName = "mark";
        //             $school = 'UBC';
        //             $gender = 'M';
        //             break;
        //         case 1:
        //             $first_name = $faker->firstNameMale;
        //             $last_name = $faker->lastName;
        //             $pictureName = "john";
        //             $gender = 'B';
        //             $school = 'SFU';
        //             break;
        //         case 2:
        //             $first_name = $faker->firstNameFemale;
        //             $last_name = $faker->lastName;
        //             $pictureName = "mary";
        //             $gender = 'F';
        //             $school = 'BCIT';
        //             break;
        //     }
        //     Student::create([
        //         'first_name' => $first_name,
        //         'last_name' => $last_name,
        //         'email' => $faker->unique()->safeEmail,
        //         'picturePath' => "assets/images/$pictureName.png",
        //         'gender' => $gender,
        //         'isActive' => $rnd,
        //         'dob' => $faker->date,
        //         'school' => $school,

        //     ]);
        //}     
    }
}
