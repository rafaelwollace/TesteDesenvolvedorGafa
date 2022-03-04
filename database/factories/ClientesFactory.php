<?php

namespace Database\Factories;

use App\Models\Clientes;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientesFactory extends Factory
{

    protected $model = Clientes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'NomeCliente' => $this->faker->name,
            'CPF' => $this->faker->numerify('##########'),
            'EMAIL' => $this->faker->email

        ];
    }
}
