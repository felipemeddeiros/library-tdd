<?php

namespace Tests\Feature;

use App\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class AuthorManagementTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_author_can_be_created()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/authors', [
            'name' => 'Author Name',
            'dob'  => '05/14/1988',
        ]);

        $authors = Author::all();

        $this->assertCount(1, $authors);

        $this->assertInstanceOf(Carbon::class, $authors->first()->dob);
        $this->assertEquals('1988/14/05', $authors->first()->dob->format('Y/d/m'));
    }
}
