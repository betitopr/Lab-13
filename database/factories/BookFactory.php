<?php

namespace Database\Factories;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'year' => $this->faker->year,
            'author' => $this->faker->name,
            'publisher' => $this->faker->company,
        ];
    }
}