<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersRoleTest extends TestCase
{
    public function test_commum_users_are_redirected_to_user_dashboard(): void
    {
        $user = User::factory()->create(['role' => 'user']);

        $response = $this->post('/login', [
            'login' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/dashboard');
    }

    public function test_admin_users_are_redirected_to_admin_dashboard(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $response = $this->post('/login', [
            'login' => $admin->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/admin/dashboard');
    }

    public function test_agent_users_are_redirected_to_agent_dashboard(): void
    {
        $agent = User::factory()->create(['role' => 'agent']);

        $response = $this->post('/login', [
            'login' => $agent->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/agent/dashboard');
    }
}
