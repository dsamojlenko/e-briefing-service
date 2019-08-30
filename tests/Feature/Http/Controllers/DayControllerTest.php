<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * @see \App\Http\Controllers\DayController
 */
class DayControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function destroy_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $day = factory(\App\Day::class)->create();
        $user = factory(\App\User::class)->create();

        $response = $this->actingAs($user)->delete(route('days.destroy', [$day]));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function edit_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $day = factory(\App\Day::class)->create();
        $user = factory(\App\User::class)->create();

        $response = $this->actingAs($user)->get(route('days.edit', [$day]));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function update_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $day = factory(\App\Day::class)->create();
        $user = factory(\App\User::class)->create();

        $response = $this->actingAs($user)->put(route('days.update', [$day]), [
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
            \App\Http\Controllers\DayController::class,
            'update',
            \App\Http\Requests\StoreDay::class
        );
    }

    // test cases...
}
