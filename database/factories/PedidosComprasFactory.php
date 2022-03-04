<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PedidosCompras;
use App\Models\Clientes;
use App\Models\Produtos;
use App\Models\StatusPedidos;

use Illuminate\Database\Eloquent\Factories\Factory;

class PedidosComprasFactory extends Factory
{

    protected $model = PedidosCompras::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fk_id_status' =>  $this->faker->numberBetween(1, 3),
            'fk_id_clientes' => Clientes::factory(),
            'fk_id_produtos' => Produtos::factory(),
            'NumeroPedido' =>  $this->faker->unique()->randomNumber(),
            'DtPedido' => $this->faker->dateTime,
            'Quantidade' => $this->faker->numberBetween(1, 1000),

        ];
    }
}
