<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class membuatnotes extends DuskTestCase
{
    /**
     * A basic browser test registrasi.
     * @group registrasi
     */
    public function testmembuatnotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clicklink('notes')
                    ->clicklink('create_note')
                    ->type('title', 'modul3')
                    ->type('description', 'susah_beut')
                    ->press('create')
                    ->pause(2000)
                    ->assertPathIs('/notes');


        });
    }
}
