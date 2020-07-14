<?php

use Illuminate\Database\Seeder;
use App\Customers;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        $record = 600000;

        for($i=0; $i<$record; $i++){
            
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;

            $data[] = [
                'cust_first_name' => $firstName,
                'cust_last_name'  => $lastName,
                'cust_email'      => $faker->email,
                'cust_tel_no'     => $faker->phoneNumber,
                'cust_address'    => $faker->address,
                'cust_city'       => $faker->city
            ];

        }

        $data_chunk = array_chunk($data,5000);

        foreach ($data_chunk as $customer) {
            Customers::insert($customer);
        }

    }
}
