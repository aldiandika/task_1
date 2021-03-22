<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }

    public function testOutOfStock(){
        $parameters = [
            'user_code' => 'USR001', 
            'user_name' => 'Andika',
            'item_code' => 'ABC123',
            'item_name' => 'Shirt',
            'item_price' => '200000',
            'ordered_qty' => '1',
            'payment_status' => 'unpaid',
            'process_flag'=> 'true',
        ];

        $this->post('/api/checkout',$parameters, []);
        $this->seeStatusCode(201);
        $this->seeJson([
            'success' => true,
            'message' => 'Sorry, Item is Out of Stock !',
            'data' => ([
                    'proceed_payment' => false
                ])
        ]);
    }
}
