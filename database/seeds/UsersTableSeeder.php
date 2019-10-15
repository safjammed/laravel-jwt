<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Safayat Jamil",
            'email' => "safayatjamil27@gmail.com",
            'password' => Hash::make('demo'),
            'username' => 'safjammed'

        ]);
        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'username' => $faker->userName,
                'password' => Hash::make('demo'),
            ]);
        }
        \Illuminate\Support\Facades\DB::table("users")->update(["email_verified_at" => "2019-04-28 17:54:08"]);



    }
}
