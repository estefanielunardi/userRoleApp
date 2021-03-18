<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreRoleTest extends TestCase
{
    public function test_route_store_a_role()
    {
        $response = $this->get('/role');

        $response->assertStatus(200);
    }

}
