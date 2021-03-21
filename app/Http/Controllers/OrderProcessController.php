<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderProcessController extends Controller
{

    // Get all item
    public function getAllItem(){
        
        $inventory = Inventory::all();

        return response()->json([
            'success' => true,
            'message' =>'List all Item',
            'data'    => $inventory
        ], 200);
    }
    // End of Get all item

    // Input item to inventory
    public function inputItem(Request $request){

        $validator = Validator::make($request->all(), [
            'item_code' => 'required', 
            'item_name' => 'required',
            'item_price' => 'required',
            'item_qty' => 'required',
        ]);

        if ($validator -> fails()){
            return response()->json([
                'success' => false,
                'message' => 'All column must be filled !!',
                'data'   => $validator->errors()
            ],401);
        }
        else{
            $inventory = Inventory::create([
                'item_code'  => $request->input('item_code'),
                'item_name'  => $request->input('item_name'),
                'item_price' => $request->input('item_price'),
                'item_qty' => $request->input('item_qty'),
            ]);
    
            if ($inventory) {
                return response()->json([
                    'success' => true,
                    'message' => 'Item saved !',
                    'data' => $inventory
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to save item !',
                ], 400);
            }
        }

    }
    // End of Input item to inventory


     // Get all order
     public function getAllOrder(){
        
        $order = Order::all();

        return response()->json([
            'success' => true,
            'message' =>'List all Order',
            'data'    => $order
        ], 200);
    }
    // End of Get all order

    // Make order
    public function makeOrder(Request $request){

        $validator = Validator::make($request->all(), [
            'user_code' => 'required', 
            'user_name' => 'required',
            'item_code' => 'required',
            'item_name' => 'required',
            'item_price' => 'required',
            'ordered_qty' => 'required',
            'payment_status' => 'required',
            'process_flag' => 'required',
        ]);

        if ($validator -> fails()){
            return response()->json([
                'success' => false,
                'message' => 'All column must be filled !!',
                'data'   => $validator->errors()
            ],401);
        }
        else{
            $order = Order::create([
                'user_code'  => $request->input('user_code'),
                'user_name'  => $request->input('user_name'),
                'item_code' => $request->input('item_code'),
                'item_name' => $request->input('item_name'),
                'item_price' => $request->input('item_price'),
                'ordered_qty' => $request->input('ordered_qty'),
                'payment_status' => $request->input('payment_status'),
                'process_flag' => $request->input('process_flag'),
            ]);
    
            if ($order) {
                return response()->json([
                    'success' => true,
                    'message' => 'Item saved !',
                    'data' => $order
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to save item !',
                ], 400);
            }
        }

    }
    // End of Make order

    
}
