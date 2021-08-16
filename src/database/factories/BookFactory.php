<?php


namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        $authors = Author::all();

        return [
            'name' => $this->faker->sentence(),
            "author_id" => $authors->random()->id,
        ];
    }

}
