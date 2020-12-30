<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Academic_personnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Academic_personnel::create([
            'Title'=>'Mrs',
            'FirstName'=>'Tharmini',
            'LastName'=>Str::random(10),
            'Gender'=>'Female',
            'DateOfBirth'=>Str::random(10),
            'Designation'=>Str::random(10),
            'AdminRole'=>Str::random(10),
            'EmailID'=>Str::random(10).'@gmail.com',
            'LinkedIn'=>Str::random(10),
            'ContactNumber'=>Str::random(10),
            'Faculty'=>Str::random(10),
            'Department'=>Str::random(10),
            'OfficialWebsite'=>Str::random(10),
            'ResearchInterest'=>Str::random(10),
            'FieldOfSpecialization'=>Str::random(10),
            'ResearchID'=>Str::random(10),
      ]);
    }
}
