<?php

use TeachMe\Entities\Ticket;

class TicketTableSeeder extends BaseSeeder{

    public function getModel()
    {
        return new Ticket();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'title'     => $faker->sentence(),
            'status'    => $faker->randomElement(['open', 'open', 'closed']),
            'user_id'   => $this->getRandom('User')->id
            /* Metodos para id aleatorio
                'user_id'   => rand(1, 51)
                'user_id'   => $this->createFrom('UserTableSeeder')->id
            */
        ];
    }

    /*public function run()
    {
        $this->createMultiple(50);
    }*/
}