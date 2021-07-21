<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class pemainBolaSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama'          => 'Kylian Mbappe',
        //         'negara'        => 'France',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now()
        //     ],
        //     [
        //         'nama'          => 'Phil Foden',
        //         'negara'        => 'England',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now()
        //     ],
        // ];

        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i <= 10; $i++) {
            $data = [
                'nama'          => $faker->name,
                'negara'        => $faker->country,
                'created_at'    => Time::createFromTimestamp($faker->unixTime(), 'Asia/Jakarta', 'en_US'),
                'updated_at'    => Time::now('Asia/Jakarta', 'en_US')
            ];
            $this->db->table('pemainBola')->insert($data);
        }
        // Simple Queries
        // $this->db->query("INSERT INTO pemainbola (nama, negara, created_at, updated_at) VALUES(:nama:, :negara:, :created_at:, :updated_at:)", $data);

        // Using Query Builder
        // $this->db->table('pemainBola')->insert($data);

        // using insert builder -> inserbatch
        // $this->db->table('pemainBola')->insertBatch($data);
    }
}
