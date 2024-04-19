<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Works;
use \App\Models\User;
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
        $user= (new User())->factory()->create();
        return [
            'name' => fake()->name(),
            'SnUser'=>$user->id,
            'address'=>fake()->address()
        ];
    }
    
}
