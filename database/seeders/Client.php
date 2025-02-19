<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Client extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DatabaseSeeder::table('clients')->insert([
            [
                'Numeroclient' => '1',
                'nom' => 'Pedro',
                'email' => 'Pedro@gmail.com',
                'cartebancaire' => 'vuregr456ezf'
            ],
            [
                'Numeroclient' => '2',
                'nom' => 'tomas',
                'email' => 'tomas@gmail.com',
                'cartebancaire' => 'itrphgq564fueuio'
            ]
            ]);
    }
}
