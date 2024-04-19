<?php

namespace Database\Factories;

use App\Models\workers;
use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Works;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WorkersFactory extends Factory
{
    protected $model=workers::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $work=(new Works())->factory()->create();
        return [
            'name'=>$this->faker->name(),
            'workeraddress'=>$this->faker->address(),
            'workerphone'=>'3242342',
            'work_id'=>$work->id
        ];
    }
}
