<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
              
                 $this->browse(function(Browser $browser)
                            {
                                $user=factory(User::class)->create();
                                $browser->visit('login')
                                        ->type('email',$user->email)
                                       // ->type('password',$user->password)
                                        ->type('password','secret')
                                        ->press('Login')
                                        ->assertPathIs('/home');
                               // $user->forceDelete();
                            }
                );
    }
}
