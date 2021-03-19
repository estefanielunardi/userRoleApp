<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteRoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_a_role()
    {
        $this->withoutExceptionHandling();

        $role = [
            'title'=>'Admin'
        ];

        $this->post('/roles', $role);

        $response = $this->delete('/roles/1');

        $response->assertRedirect('/roles', $role);
        $this->assertDatabaseCount('roles', 0);
        $this->assertDatabaseMissing('roles', $role);
    }
}
