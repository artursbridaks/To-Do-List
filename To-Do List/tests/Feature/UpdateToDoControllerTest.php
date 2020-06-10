<?php

    namespace Tests\Feature;

    use Tests\TestCase;

    class UpdateToDoControllerTest extends TestCase
    {
        public function testRouteExists(): void
        {
            $response = $this->get('to-dos.update');
            $response->assertStatus(404);
        }
    }

