<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * @see \App\Http\Controllers\BinderPeopleController
 */
class BinderPeopleControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function create_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $binder = factory(\App\Binder::class)->create();
        $user = factory(\App\User::class)->create();

        $response = $this->actingAs($user)->get(route('binders.people.create', [$binder]));

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

        $response = $this->actingAs($user)->get(route('binders.people.index', [$binder]));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $binder = factory(\App\Binder::class)->create();
        $user = factory(\App\User::class)->create();

        $response = $this->actingAs($user)->post(route('binders.people.store', [$binder]), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_validates_with_a_form_request()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\BinderPeopleController::class,
            'store',
            \App\Http\Requests\StorePerson::class
        );
    }

    // test cases...
}
