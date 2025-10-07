<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Review::class;
    public function definition()
    {
        return [
            'client' => $this->faker->name(),
            'occupation' => $this->faker->title(),
            'comment' => $this->faker->paragraph(),
            'photo_path' => 'reviews/'.$this->faker->word().'.jpg'
        ];
    }
}
