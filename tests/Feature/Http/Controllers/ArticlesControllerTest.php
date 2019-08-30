<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * @see \App\Http\Controllers\ArticlesController
 */
class ArticlesControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function destroy_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $article = factory(\App\Article::class)->create();

        $response = $this->delete(route('articles.destroy', [$article]));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function edit_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $article = factory(\App\Article::class)->create();

        $response = $this->get(route('articles.edit', [$article]));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function show_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $article = factory(\App\Article::class)->create();

        $response = $this->get(route('articles.show', [$article]));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function update_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $article = factory(\App\Article::class)->create();

        $response = $this->put(route('articles.update', [$article]), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function update_validates_with_a_form_request()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ArticlesController::class,
            'update',
            \App\Http\Requests\StoreArticle::class
        );
    }

    // test cases...
}
