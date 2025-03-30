<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_products_retrieved(): void
    {
        $this->seed();
        $headers = $this->getHeaders();
        $response = $this->get('/api/products', $headers);
        $response->assertStatus(200);
        $response->assertJson([
            'from' => 1,
            'to' => 20,
            'total' => 50
        ]);
    }

    public function test_product_retrieved(): void
    {
        $this->seed();
        $headers = $this->getHeaders();
        $response = $this->get('/api/products/1', $headers);
        $response->assertStatus(200);
        $response->assertJson([
            'id' => 1,
            'name' => 'Tuborg Classic 0,5 l',
            'description' => '',
            'price' => 65.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Populær',
            'tag_color' => 'blue',
        ]);
    }

    public function test_product_created(): void
    {
        $this->seed();
        $headers = $this->getHeaders();

        $body = [
            'name' => 'New Product',
            'description' => 'Some words about the product.',
            'price' => 200.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Hot',
            'tag_color' => 'red',
        ];

        $response = $this->post('/api/products', $body, $headers);
        $response->assertStatus(201);
        $response->assertJson([
            'id' => 51,
            'name' => 'New Product',
            'description' => 'Some words about the product.',
            'price' => 200.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Hot',
            'tag_color' => 'red',
        ]);
    }

    public function test_product_updated()
    {
        $this->seed();
        $headers = $this->getHeaders();

        $body = [
            'name' => 'Updated Product',
        ];

        $response = $this->put('/api/products/1', $body, $headers);
        $response->assertStatus(200);
        $response->assertJson([
            'id' => 1,
            'name' => 'Updated Product',
        ]);
    }

    public function test_product_deleted()
    {
        $this->seed();
        $headers = $this->getHeaders();
        $response = $this->delete('/api/products/1', [], $headers);
        $response->assertStatus(204);
        $this->assertDatabaseCount('products', 49);
    }
}
