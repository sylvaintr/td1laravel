<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
class clientseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Client::insert([
        //     [
        //         'Numeroclient' => '1',
        //         'nom' => 'Pedro',
        //         'email' => 'Pedro@gmail.com',
        //         'cartebancaire' => 'vuregr456ezf'
        //     ],
        //     [
        //         'Numeroclient' => '2',
        //         'nom' => 'tomas',
        //         'email' => 'tomas@gmail.com',
        //         'cartebancaire' => 'itrphgq564fueuio'
        //     ]
        //     ]);

        Client::factory()->count(2025)->create();
    }
}
