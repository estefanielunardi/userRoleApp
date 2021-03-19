<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Role;

class StoreRoleTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_store_route()
    {
        $response = $this->get('/roles');

        $response->assertStatus(200);
    }

    public function test_a_role_can_be_store()
    {
        $this->withoutExceptionHandling();

        $role = [
            'title' => 'Admin',
        ];

        $response = $this->post('/roles' , $role);

        $response->assertStatus(201);
        $this->assertDatabaseHas('roles', $role);
    }
}
