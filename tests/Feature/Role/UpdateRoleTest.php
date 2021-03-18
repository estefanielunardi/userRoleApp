<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdateRoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_role_stored_can_be_updated()
    {
        $this->withoutExceptionHandling();
        
        $role =[ 
            'name'=>'Admin'
        ];

        $this->post('/roles',$role);

        $roleUpdated =[ 
            'name'=>'User'
        ];

        $response = $this->put('/roles/1', $roleUpdated);

        $response->assertStatus(200);

        $this->assertDatabaseHas('roles', $roleUpdated);
    }
}
