<?php

namespace Tests\Unit\Http\Requests;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * @see \App\Http\Requests\StorePerson
 */
class StorePersonTest extends TestCase
{
    /** @var \App\Http\Requests\StorePerson */
    private $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = new \App\Http\Requests\StorePerson();
    }

    /**
     * @test
     */
    public function authorize()
    {
        $actual = $this->subject->authorize();

        $this->assertTrue($actual);
    }

    /**
     * @test
     */
    public function rules()
    {
        $actual = $this->subject->rules();

        $this->assertEquals([
            'first_name' => 'required',
            'last_name' => 'required',
            'image' => 'sometimes|image'
        ], $actual);
    }

    // test cases...
}
