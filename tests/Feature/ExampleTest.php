<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->get('/')
            ->assertStatus(200)
            ->assertSee('miAnticipAdA')
            ->assertSee('Entrar')
            ->assertSee('Registrarme')
            ;

    }
}
