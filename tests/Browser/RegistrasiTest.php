<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
    $this->browse(function (Browser $browser) {
        $browser->visit('/') // Untuk mengunjungi url
                ->assertSee('Modul 3') // Melihat teks Modul 3
                ->clickLink('Register') // tautan registrasi
                ->assertPathIs('/register') // memastikan url setelah tautan sebelumnya
                ->type('name', 'admin') // input name
                ->type('email', 'admin@gmail.com') // input email
                ->type('password', 'password') // input password
                ->type('password_confirmation', 'password') // input konfirmasi password
                ->press('REGISTER'); // menekan tombol submit
            });
    }
}


