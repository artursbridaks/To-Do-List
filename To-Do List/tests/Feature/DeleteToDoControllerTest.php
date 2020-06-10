<?php

namespace Tests\Feature;

use App\ToDo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteToDoControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function testSuccessful()
    {
        $todo = factory(ToDo::class)->create();

        $this->followingRedirects();

        $response = $this->delete(route('to-dos.delete', $todo));

        $this->assertDatabaseMissing('todos', [
            'id' => $todo->id
        ]);

        $response->assertStatus(200);
    }
}
