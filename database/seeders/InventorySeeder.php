<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory')->delete();
        DB::table('inventory')->insert([
            [
                'item_code' => 'ABC123',
                'item_name' => 'Shirt',
                'item_price' => '200000',
                'item_qty' => '1',
            ]
        ]);
    
    }
}
