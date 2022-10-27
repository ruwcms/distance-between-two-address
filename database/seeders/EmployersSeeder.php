<?php

namespace Database\Seeders;

use App\Models\Employer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employer::create([
            'name' => 'Wielink Websolutions',
            'address' => 'Marconiweg',
            'addressnumber' => 24,
            'addressnumber_ext' => 'a',
            'zipcode' => '8071 RA',
            'city' => 'Nunspeet',
            'email' =>   'info@wielink.nu',
            'country_id' => 1
        ]);
    }
}

