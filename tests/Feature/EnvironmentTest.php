<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testGetEnv() {
        $youtube = env("YOUTUBE");

        self::assertEquals('DryyTech', $youtube);
    }

    public function testDefauktEnv(){
        $author = env('AUTHOR', 'Andry');

        self::assertEquals('Andry', $author);
    }
}
