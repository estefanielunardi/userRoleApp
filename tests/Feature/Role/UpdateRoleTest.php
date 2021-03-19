<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Role;

class UpdateRoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_role_stored_can_be_updated()
    {
        $this->withoutExceptionHandling();
        
        $role =[ 
            'title'=>'Admin'
        ];

        $this->post('/roles', $role);

        $roleUpdated =[ 
            'title'=>'User'
        ];

        $response = $this->put('/roles/1', $roleUpdated);

        $response->assertStatus(302)
                ->assertRedirect('/roles', $roleUpdated);;

        $this->assertDatabaseHas('roles', $roleUpdated);
    }
}
