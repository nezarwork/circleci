<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CanReadApiVersionTest extends TestCase
{
    
    /** @test */
    public function can_read_api_version()
    {
        
        $res = $this->get('api');

        $res->assertSee('API V1.0');
    }
}
