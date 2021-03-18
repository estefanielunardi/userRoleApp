<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdateRoleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
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

        $response = $this->post('/roles', $roleUpdated);

        $response->assertStatus(201);

        $this->assertDatabaseHas('roles', $roleUpdated);
    }
}
