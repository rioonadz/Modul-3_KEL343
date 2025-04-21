<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class registrasi extends DuskTestCase
{
    /**
     * A basic browser test registrasi.
     * @group registrasi
     */
    public function testregistrasi(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clicklink('register')
                    ->type('name', 'user1')
                    ->type('mail', 'user1@gmail.com')
                    ->type('password', '12345678')
                    ->type('password_confirmation', '12345678')
                    ->press('REGISTER')
                    ->pause(2000)
                    ->assertPathIs('/dashboard');


        });
    }
}
