<?php

namespace Tests\Feature;

use App\ToDo;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EditToDoControllerTest extends TestCase
{
    use DatabaseMigrations, WithFaker;

    public function testSuccessful()
    {
        $todo = factory(ToDo::class)->create();

        $this->followingRedirects();

        $response = $this->get(route('to-dos.edit', $todo));

        $this->assertDatabaseHas('todos', [
              'text' => $todo->text
        ]);

        $response->assertStatus(200);
    }

//    public function testForLabelExists(): void
//    {
//        $response = $this->get('/to-dos/{todo}/edit');
//        $response->assertSeeText('Edit the entry');
//    }
}
