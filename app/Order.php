<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * @var string
     */
    protected $table = 'orders';

    /**
     * @var array
     */
    protected $fillable = [
        'user_code', 
        'user_name',
        'item_code',
        'item_name',
        'item_price',
        'ordered_qty',
        'payment_status',
        'process_flag',
    ];
}