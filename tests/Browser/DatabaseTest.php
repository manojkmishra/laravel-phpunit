<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DatabaseTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
       // $this->browse(function (Browser $browser) {  $browser->visit('/')->assertSee('Laravel');     });

      // $this->assertDatabaseHas('users',['email'=>'root1@example.com']);
      //  $this->assertDatabaseMissing('users',['email'=>'root1@example.com']);
      $this->assertSoftDeleted('users',['email'=>'root@example.com']);

    }
}
