<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @group login
     */
    public function testLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Login')  
                    ->type('email', 'user1@gmail.com')
                    ->type('password', '12345678')
                    ->pause(2000)
                    ->assertPathIs('/dashboard'); 
        });
    }
}

