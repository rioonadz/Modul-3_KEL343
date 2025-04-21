<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @group createtest
     */
    public function testcreate(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'user1@gmail.com')
                    ->type('password', '12345678')
                    ->press('LOG IN')
                    ->pause(2000)
                    ->assertPathIs('/dashboard')
                    ->clicklink('Notes')
                    ->clicklink('Create Note')
                    ->type('title', 'MODUL3')
                    ->type('description', 'RIWEH')
                    ->press('CREATE')
                    ->assertPathIs('/notes');
        });
    }
}