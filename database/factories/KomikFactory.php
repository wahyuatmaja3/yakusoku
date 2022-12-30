<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Komik>
 */
class KomikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "genreId" => 1,
            "judul" => $this->faker->words(4, true),
            "tahunTerbit" => $this->faker->numberBetween(2000, 2022),
            "harga" => mt_rand(1, 100) * 1000,
            "stok" => $this->faker->numberBetween(1, 100),
            "isbn" => $this->faker->isbn13(),
            // "desc" => collect($this->faker->paragraphs(mt_rand(3,6)))->map(fn($p) => "<p></p>")->implode(""),
            "img" => "cover.jpg",
            "author" => $this->faker->name(),
        ];
    }
}
