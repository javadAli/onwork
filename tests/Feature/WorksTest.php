<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use \App\Models\User;
use \App\Models\Works;
use Tests\TestCase;

class WorksTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_the_works_index_method_work_and_exists(): void
    {
        $user=User::factory()->create();
        $response=$this->actingAs($user)->get("/works");
        $response->assertStatus(200);
    }
    public function test_the_store_method_of_works_work_and_exists(){
        $user=(new User())->factory()->create();
        $response=$this->actingAs($user)->post("/works",[
            'name'=>'Work 1',
            'address'=>'Ferdowsi Hafiz East 12 1',
            'SnUser'=>$user->id,
        ]);
        $this->assertGreaterThan(0,count($response->json()["work"]),'not added the new Work');
    }

    public function test_the_user_can_update_the_work(){
        $user=(new User())->factory()->create();
        $work=(new Works())->factory()->create();
        $response=$this->actingAs($user)->put("works/$work->id",['name'=>'Work 1','address'=>'Ferdowsi Hafiz East 12 1','SnUser'=>$user->id]);
        $this->assertGreaterThan(0,$response->json()['work']);
    }
}
