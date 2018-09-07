<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        //$this->assertTrue(true);
      //  $response = $this->get('/'); //can be any api or url
       // $response->assertStatus(404); //this test fails
       // $response->assertStatus(200); //---this test pass

       $user=factory(User::class)->create();
       $response=$this->actingAs($user)->get('/');
       $response->assertSuccessful();
       $user->forceDelete();
    }
}
