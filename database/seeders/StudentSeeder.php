<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //for seeder
        // DB::table('students')->insert([
        //     'student_id'=>Str::random(10),
        //     'name'=>Str::random(15),
        //     'age'=>rand(10,17),
        //     'email'=>Str::random(10).'@gmail.com',
        //     'address'=>Str::random(15),
        //     'contact'=>Str::random(10),
        //     'nationality'=>Str::random(15)
        // ]);

        //for faker
        $faker = Faker::create();
        foreach (range(1,10) as $index){
            DB::table('students')->insert([
                'student_id'=>$faker->unique()->uuid,
                'name'=>$faker->name,
                'age'=>$faker->numberBetween(10, 19),
                'email'=>$faker->unique()->safeEmail,
                'address'=>$faker->address,
                'contact'=>$faker->unique()->phoneNumber,
                'nationality'=>$faker->country
           ]);
        }
    }
}
