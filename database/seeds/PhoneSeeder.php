<?php

use Illuminate\Database\Seeder;
use App\Models\Phone;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $faker = Faker\Factory::create();
        for($i=0 ;$i<100;$i++){
        factory(Phone::class)->create([
            'id' => $faker->uuid,
            'country' => $faker->country,
            'status' => $i%2==0?'Ok':'Nok',
            'country_code' => $faker->countryCode,
            'phone_num' => $faker->phoneNumber,
        ]);
        }
    }
}
