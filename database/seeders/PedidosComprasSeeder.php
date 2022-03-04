<?php

namespace Database\Seeders;

use App\Models\PedidosCompras;
use Illuminate\Database\Seeder;

class PedidosComprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pedidoscompras = new PedidosCompras();

        PedidosCompras::factory()->count(100)->create();
    }
}
