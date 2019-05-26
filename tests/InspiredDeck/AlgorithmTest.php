<?php

namespace MBLSolutions\InspiredDeck;

use MBLSolutions\TestCase;

class AlgorithmTest extends TestCase
{
    /** @var Algorithm $algorithm */
    protected $algorithm;

    /** {@inheritdoc} **/
    public function setUp()
    {
        parent::setUp();

        InspiredDeck::setToken('test_token');

        $this->algorithm = new Algorithm();
    }
    
    /** @test **/
    public function can_get_select_list(): void
    {
        $this->mockExpectedHttpResponse([
            'data' => [
                'LUHN' => [
                    'id' => 'luhn',
                    'name' => 'Luhn'
                ]
            ]
        ]);

        $response = $this->algorithm->select();

        $this->assertEquals($response, $this->getMockedResponseBody());
    }

}