<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // $this->call(UserTableSeeder::class);
        \App\User::create([
            'name'=>'PAPE SAMBA NDOUR',
            'email'=>'papesambandour@hotmail.com',
            'password'=>bcrypt('Admin1122'),
        ]);
        $faker = Faker::create();

        for ($i = 0; $i < 100 ; $i++)
        {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            \App\Etudiant::create([
                'prenom'=>$firstName,
                'nom'=>$lastName
            ]);
        }


    }
}
