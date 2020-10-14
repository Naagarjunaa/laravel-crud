<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contact::truncate();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Contact::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'number' => $faker->phoneNumber,
                'user_id' => 1,
                'description' => $faker->text
            ]);
        }
    }
}
