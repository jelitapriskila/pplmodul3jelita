<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
                ->assertSee('Modul 3') //mengunjungi url
                ->clickLink('Log in') // tautan registrasi
                ->assertPathIs('/login') // memastikan url setelah tautan sebelumnya
                ->type('name', 'admin') // input name
                ->type('email', 'admin@gmail.com') // input email
                ->type('password', 'password') // input password
                ->press('LOG IN'); // menekan tombol submit
        });
    }
}
