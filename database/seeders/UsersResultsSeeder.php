<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UsersResults;
class UsersResultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
       {
           UsersResults::create([
                                'code' => '',
                                'iin' => '',
                                'fio' => '',
                                'depart' => '',
                                'case' => '',
                                'result' => '',
                             ]);
       }
}
