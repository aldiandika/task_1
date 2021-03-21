<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    /**
     * @var string
     */
    protected $table = 'inventory';

    /**
     * @var array
     */
    protected $fillable = [
        'item_code', 
        'item_name',
        'item_price',
        'item_qty',
    ];
}