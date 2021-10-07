<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kategori_id' => mt_rand(1,3),
            'judul' => $this->faker->sentence(mt_rand(2,3)),
            'isi' => $this->faker->paragraph(mt_rand(5,10)),
            'gambar' => 'https://source.unsplash.com/300x200/?water',
            'status' => 1,
            'slug' => $this->faker->slug()
        ];
    }
}
