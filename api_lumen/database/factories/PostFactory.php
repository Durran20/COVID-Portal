<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
    	return [
    	    // Entering dummy data
            'name' => $this->faker->text(30),
            'age' => $this->faker->text(10),
            'dob' => $this->faker->text(10),
            'aadhar' => $this->faker->text(5),
            'address' => $this->faker->text(30),
            'result' => $this->faker->text(10)
    	];
    }
}

