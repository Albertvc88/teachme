<?php
/**
 * Created by PhpStorm.
 * User: Albertvc88
 * Date: 25/05/15
 * Time: 16:26
 */

use Illuminate\Database\Seeder;
use TeachMe\Entities\User;
use Faker\Factory  as Faker;


class UserTableSeeder extends Seeder{

    public function run()
    {
        $this->createAdmin();
        $this->createUsers(50);

    }

    private function createAdmin()
    {
        User::create([
            'name'      => 'Albert Vargas',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('admin')
        ]);
    }

    private function createUsers($total)
    {
        $faker = Faker::create();

        for ($i = 1; $i <= $total; $i++)
        {
            User::create([
                'name'       => $faker->name,
                'email'     => $faker->email,
                'password'  => bcrypt('secret')
            ]);
        }
    }
} 