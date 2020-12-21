<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{
    public function testHomePageIsWorkingCorrectly()
    {
        $response = $this->actingAs($this->user())
                        ->get('/');

        $response->assertSeeText('Welcome to Laravel!');
        $response->assertSeeText('This is the content of the main page!');
    }

    public function testContactPageIsWorkingCorrectly()
    {
        $response = $this->actingAs($this->user())
                        ->get('/contact');

        $response->assertSeeText('Contact');
        $response->assertSeeText('Hello this is contact!');
    }
}
