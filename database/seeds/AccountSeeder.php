<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id' => 1,
                'acct_name' => 'Ladeza B. Regular Account',
                'init_invest' => 60000,
                'start_date' => '2020-02-22',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' =>  2,
                'acct_name' => 'Palapar B. Regular Account',
                'init_invest' => 29000,
                'start_date' => '2020-03-12',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Peroramas B. Regular Account',
                'init_invest' => 100000,
                'start_date' => '2020-06-21',
                'remarks' => 'Done with normal transaction'
            ],
        ];

        foreach($data as $acc) {
            \App\Account::create($acc);
        }
    }
}
