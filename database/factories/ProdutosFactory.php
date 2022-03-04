<?php

namespace Database\Factories;

use App\Models\Produtos;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutosFactory extends Factory
{

    protected $model = Produtos::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'NomeProduto' => $this->faker->word,
            'CodBarras' => $this->faker->numerify('##-#####-#####-#####'),
            'ValorUnitario' => $this->faker->numerify('###.###'),

        ];
    }
}
