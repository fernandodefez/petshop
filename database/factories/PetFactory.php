<?php

namespace Database\Factories;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //true, 'public/storage/pets/image1', but if false just 'image1'
        return [
            'name' => $this->faker->word(20),
            'img' => $this->faker->image(storage_path().'\app\public\pets',1000,600, null, false)
        ];
    }
}
