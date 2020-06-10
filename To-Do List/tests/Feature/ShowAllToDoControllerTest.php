<?php

namespace Tests\Feature;

use Tests\TestCase;

class ShowAllToDoControllerTest extends TestCase
{
    public function testRouteExistsCreate(): void
    {
        $response = $this->get('/to-dos/create');
        $response->assertStatus(200);
    }
}
