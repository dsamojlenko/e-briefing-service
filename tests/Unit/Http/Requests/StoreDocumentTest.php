<?php

namespace Tests\Unit\Http\Requests;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * @see \App\Http\Requests\StoreDocument
 */
class StoreDocumentTest extends TestCase
{
    /** @var \App\Http\Requests\StoreDocument */
    private $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = new \App\Http\Requests\StoreDocument();
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
            'name' => 'required',
            'document_type' => 'required',
            'file' => 'file|mimes:pdf'
        ], $actual);
    }

    // test cases...
}
