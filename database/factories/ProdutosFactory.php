<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->company(),
            'descricao' => $this->faker->text(40),
            'estoque' => $this->faker->numberBetween(0, 20000),
            'preco' => random_int(10, 20000),
            'codigo_barras' => random_int(1000000000000, 9999999999999),
        ];
    }
}
