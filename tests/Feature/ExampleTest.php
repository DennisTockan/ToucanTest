<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_home_page_successful(): void
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    public function test_create_page_successful(): void
    {
        $response = $this->get('/create');

        $response->assertStatus(200);
    }

    public function test_homeid_page_successful(): void
    {
         $school_id = 1;
         $response = $this->get("/home/{$school_id}");

        $response->assertStatus(200);
    }

    public function test_create_page_unsuccessful(): void
    {
        $response = $this->get('/notfound');

        $response->assertStatus(404);
    }

    public function test_post_create_page_successful(): void
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'school' => '1'
        ];
    
        $response = $this->post(route('store.member'), $data);

        // Check that a new member has been added to the database
        $this->assertDatabaseHas('members', ['name' => 'John Doe', 'email' => 'johndoe@example.com', 'school_id' => '1']);
    
        // Check that the user is redirected to the expected route
        $response->assertRedirect('/home');
    }
    
}
