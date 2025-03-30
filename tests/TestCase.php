<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getHeaders(): array
    {
        $body = [
            'email' => 'admin@lfopos.com',
            'password' => 'admin',
        ];

        $headers = ['Accept' => 'application/json'];
        $response = $this->post('/api/tokens', $body, $headers);
        $response->assertStatus(200);
        $headers['Authorization'] = 'Bearer ' . $response['token'];
        return $headers;
    }
}
