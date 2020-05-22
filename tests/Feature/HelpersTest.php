<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelpersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */

    public function pageTitleWork(){

        pageTitle("");
        $this->assertTrue(true);

    }

    /** @test */

    public function page_shuld_return_title(){

        $this->assertEquals('Laracarte - List of artisans',pageTitle(""));

    }

}
