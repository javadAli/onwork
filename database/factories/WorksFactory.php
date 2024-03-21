<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Works;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Works>
 */
class WorksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=\App\Models\Works::class;
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'address'=>fake()->address()
        ];
    }
    
}
