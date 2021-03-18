<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreRoleTest extends TestCase
{
    public function test_store_route()
    {
        $response = $this->get('/roles');

        $response->assertStatus(200);
    }

    public function test_a_role_can_be_store()
    {
        $this->withoutExceptionHandling();

        $role = [
            'name' => 'Admin'
        ];

        $response = $this->post('/roles' , $role);

        $response->assertStatus(201);
        $this->assertDatabaseHas('roles', $role);
    }
}
