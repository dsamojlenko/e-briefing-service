<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * @see \App\Http\Controllers\BinderCollaboratorsController
 */
class BinderCollaboratorsControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function add_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $binder = factory(\App\Binder::class)->create();
        $user = factory(\App\User::class)->create();

        $response = $this->actingAs($user)->put(route('binders.collaborators.add', [$binder]), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $binder = factory(\App\Binder::class)->create();
        $user = factory(\App\User::class)->create();

        $response = $this->actingAs($user)->get(route('binders.collaborators.index', [$binder]));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    // test cases...
}
