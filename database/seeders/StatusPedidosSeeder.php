<?php

namespace Database\Seeders;

use App\Models\StatusPedidos;
use Illuminate\Database\Seeder;

class StatusPedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusPedidos::create([
            'status' => 'Em Aberto'
        ]);

        StatusPedidos::create([
            'status' => 'Pago'
        ]);

        StatusPedidos::create([
            'status' => 'Cancelado'
        ]);
    }
}
