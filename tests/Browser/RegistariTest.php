<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistariTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @group registrasi
     */
    public function testRegist(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->type('name', 'user1')
                    ->type('email', 'user12345@gmail.com')
                    ->type('password', '12345678')
                    ->type('password_confirmation', '12345678')
                    ->press('REGISTER')
                    ->pause(2000)
                    ->assertPathIs('/dashboard');
        });
    }
}