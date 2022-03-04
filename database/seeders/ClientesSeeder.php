<?php

namespace Database\Seeders;

use App\Models\Clientes;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = new Clientes();

        Clientes::factory()->count(100)->create();
    }
}
