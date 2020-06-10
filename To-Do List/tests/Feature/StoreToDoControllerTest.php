<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StoreToDoControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testTextIsRequired(): void
    {
        $response = $this->post('/to-dos');
        $response->assertSessionHasErrors([
            'text' => 'The text field is required.'
        ]);

        $this->assertDatabaseMissing('todos', [
            'text' => 'New todo'
        ]);
    }

    public function testTextIsTooShort(): void
    {
        $response = $this->post('/to-dos', [
            'text' => 'N'
        ]);

        $response->assertSessionHasErrors([
            'text' => 'The text must be at least 3 characters.'
        ]);

        $this->assertDatabaseMissing('todos', [
            'text' => 'New todo'
        ]);
    }

    public function testSuccessful(): void
    {
        $this->followingRedirects();

        $response = $this->post('/to-dos', [
            'text' => 'New todo'
        ]);

        $response->assertOk();

        $this->assertDatabaseHas('todos', [
            'text' => 'New todo'
        ]);
    }
}
