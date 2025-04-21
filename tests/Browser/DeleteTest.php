<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @group deletetest
     */
    public function testdelete(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'user1@gmail.com')
                    ->type('password', '12345678')
                    ->press('LOG IN')
                    ->pause(2000)
                    ->assertPathIs('/dashboard')
                    ->clicklink('Notes')
                    ->press('Delete')
                    ->assertPathIs('/notes');
        });
    }
}