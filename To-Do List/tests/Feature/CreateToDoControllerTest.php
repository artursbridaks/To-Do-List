<?php

namespace Tests\Feature;

use Tests\TestCase;

class CreateToDoControllerTest extends TestCase
{
    public function testRouteExists(): void
    {
        $response = $this->get('/to-dos/create');
        $response->assertStatus(200);
    }

    public function testForLabelExists(): void
    {
        $response = $this->get('/to-dos/create');
        $response->assertSeeText('Create a new entry');
    }
}
