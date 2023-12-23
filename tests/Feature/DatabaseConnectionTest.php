<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseConnectionTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /**
    * A basic feature test example.
    */
    public function testDatabaseConnection()
    {
        $this->assertDatabaseHas('ygi_category', [
            'category_nm' => '期間限定商品'
        ]);
    }
}
