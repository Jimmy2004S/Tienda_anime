<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();

        $nameItem = $faker->randomElement(['Llavero DBZ', 'Billetera']);
        $precio = ($nameItem === 'Llavero DBZ') ? 35000 : 30000;
        $imagen = ($nameItem === 'Llavero DBZ') ? 'storage/img/llaverodbz.jpg' : 'storage/img/pulseranaruto.jpg';

        return [
            'name_item' => $nameItem,
            'price' => $precio,
            'picture' => $imagen,
            'description' => 'Producto'
        ];
    }

}
