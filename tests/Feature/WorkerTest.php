<?php

namespace Tests\Feature;

use App\Models\workers;
use App\Models\Works;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use \App\Models\User;
use Tests\TestCase;

class WorkerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_the_index_method_of_workers_exists_and_works(): void
    {
        $user=(new User())->factory()->create();
        (new workers())->factory()->create();
        $response = $this->actingAs($user)->get('/workers/');

        $response->assertStatus(200);

        $this->assertGreaterThan(0,count($response->json()['workers']),'the workers doesnt exist');
    }

    public function test_the_user_can_store_new_workers(){
        $user=(new User())->factory()->create();
        $work=(new Works())->factory()->create();
        $response=$this->actingAs($user)->post("/workers",['name'=>fake()->name,'workeraddress'=>fake()->address(),'workerphone'=>'45454545','work_id'=>$work->id,'created_at'=>now()]);
        $response->assertStatus(200);
        $this->assertGreaterThan(0,count($response->json()['worker']));
    }
}
