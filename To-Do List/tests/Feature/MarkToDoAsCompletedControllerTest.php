<?php

namespace Tests\Feature;

use App\ToDo;
use Carbon\Carbon;
use Tests\TestCase;

class MarkToDoAsCompletedControllerTest extends TestCase
{
    public function testForLabelExistsCompleted(): void
    {
        $response = $this->get('/to-dos/{todo}/mark-as-completed');
        $response->assertSeeText('Done');
    }

    public function testForLabelExistsUncompleted(): void
    {
        $response = $this->get('/to-dos/{todo}/mark-as-completed');
        $response->assertSeeText('In Progress');
    }
}
