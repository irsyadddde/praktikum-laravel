<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    protected $model = Mahasiswa::class;

    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'nim' => fake()->unique()->numerify('20####'),
            'jurusan' => fake()->randomElement([
                'Informatika',
                'Sistem Informasi',
                'Teknik Komputer'
            ]),
        ];
    }
}