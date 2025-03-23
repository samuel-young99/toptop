<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'post' => $this->faker->text(),
            'category_id' => Category::factory(),
            'img_path'=>$this->faker->imageUrl(640,480),
            'status'=>$this->faker->sentence(),
            'date_updated'=>$this->faker->date('Y-m-d'),
            'date_published'=>$this->faker->date('Y-m-d')

        ];
    }
}
