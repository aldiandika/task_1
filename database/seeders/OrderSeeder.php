<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->delete();
        DB::table('orders')->insert([
            [
                'user_code' => 'USR001', 
                'user_name' => 'Andika',
                'item_code' => 'ABC123',
                'item_name' => 'Shirt',
                'item_price' => '200000',
                'ordered_qty' => '1',
                'payment_status' => 'unpaid',
                'process_flag'=> 'true',
            ],
            [
                'user_code' => 'USR002', 
                'user_name' => 'Pratama',
                'item_code' => 'ABC123',
                'item_name' => 'Shirt',
                'item_price' => '200000',
                'ordered_qty' => '1',
                'payment_status' => 'unpaid',
                'process_flag'=> 'true',
            ]
        ]);
    
    }
}
