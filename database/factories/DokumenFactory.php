<?php

namespace Database\Factories;

use App\Models\Dokumen;
use Illuminate\Database\Eloquent\Factories\Factory;

class DokumenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dokumen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->word,
        'file' => $this->faker->word,
        'keterangan' => $this->faker->word,
        'prodi_id' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
