<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname' => 'Ladeza',
                'fname' =>  'Jethro Chris',
                'address' => 'Panaytayon, Tubigon, Bohol',
                'phone' => '0917.123.6789',
                'email' => 'jethro@email.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Palapar',
                'fname' => 'John Albert',
                'address' => 'Cabulijan, Tubigon, Bohol',
                'phone' => '0912.568.2222',
                'email' => 'albert@email.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Peroramas',
                'fname' => 'Johnvel',
                'address' => 'Tubigon, Bohol',
                'phone' => '0922.555.6666',
                'email' => 'johnvel@email.com',
                'password' => bcrypt('password123')
            ],
        ];

        foreach($data as $usr) {
            \App\User::create($usr);
        }
    }
}
