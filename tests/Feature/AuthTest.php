<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSiteIsUpAndReturning200()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    /** @test */
    public function databaseHasUsersTable()
    {
        $user = User::factory()->create();

        $this->assertDatabaseHas($table = 'users', $recordDetail = [
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }

    /** @test */
    public function assertUserIsAuthenticated()
    {
        $user = User::factory()->create();

        Auth::login($user);

        $this->assertAuthenticated($guard = null);  
    }

    /** @test */
    public function assertUserIsNotAuthenticated()
    {
        $user = User::factory()->create();

        $this->assertGuest($guard = null);  
    }


    /** @test */
    public function userMustBeAuthenticatedToViewSecurePage()
    {
        Auth::login($user = User::factory()->create());

        $this->get('/secure')
            ->assertStatus(200)
            ->assertSeeText('Only users authorised can view this page.');   
    }
    

    /** @test */
    public function whenVisitingSecurePageSserIsRedirectedToLoginPageIfNotLoggedIn()
    {
       $user = User::factory()->create();

       $this->get('/secure')
            ->assertRedirect('/login'); 
    }
    
    
}
