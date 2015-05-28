<?php
/**
 * Created by PhpStorm.
 * User: Albertvc88
 * Date: 25/05/15
 * Time: 16:26
 */

use Faker\Generator;
use TeachMe\Entities\User;
use Faker\Factory  as Faker;


class UserTableSeeder extends BaseSeeder{

    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'name'       => $faker->name,
            'email'     => $faker->email,
            'password'  => bcrypt('secret')
        ];
    }
    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(50);

    }

    private function createAdmin()
    {
        $this->create([
            'name'      => 'Albert Vargas',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('admin')
        ]);
    }

    /*private function createUsers($total)
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
    }*/
} 