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

    // Update item in inventory
    public function updateItem(Request $request){

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
            $itemCode = $request->input('item_code');

            $inventory = Inventory::where('item_code', $itemCode)
                        ->update([
                            'item_code'  => $request->input('item_code'),
                            'item_name'  => $request->input('item_name'),
                            'item_price' => $request->input('item_price'),
                            'item_qty' => $request->input('item_qty'),
                        ]);
    
            if ($inventory) {
                return response()->json([
                    'success' => true,
                    'message' => 'Item updated !',
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to update item !',
                ], 400);
            }
        }

    }
    // End of Update item in inventory


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
                    'message' => 'Order saved !',
                    'data' => $order
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to save order !',
                ], 400);
            }
        }

    }
    // End of Make order

    // Update order
    public function updateOrder(Request $request){

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
            $userCode = $request->input('user_code');

            $order = Order::where('user_code', $userCode)
                        ->update([
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
                    'message' => 'Order updated !',
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to update order !',
                ], 400);
            }
        }

    }
    // End of Update order


    // Checkout 
    public function checkoutFunction(Request $request){

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

            $itemCode = $request->input('item_code');
            $usrCode =  $request->input('user_code');

            // get item quantity in inventory
            $getItemQty = Inventory::select('item_qty')
                        ->where('item_code', $itemCode)
                        ->get();

            $itemQty = (int)$getItemQty[0]['item_qty'];
            $ordQty = (int)$request->input('ordered_qty');
            $lastQty = 0;

            // Check if item is available
            if ( $ordQty <= $itemQty ){
                $lastQty = $itemQty - $ordQty;

                if ( $lastQty <= 0){
                    $lastQty = 0;
                }

                // Update item quantity in inventory
                $inventory = Inventory::where('item_code', $itemCode)
                        ->update([
                            'item_code'  => $request->input('item_code'),
                            'item_name'  => $request->input('item_name'),
                            'item_price' => $request->input('item_price'),
                            'item_qty' => (string)$lastQty,
                        ]);
    
                if ($inventory) {
                    // Return flag to proceed to payment
                    return response()->json([
                        'success' => true,
                        'message' => 'Yeay, Checkout success !',
                        'data' => [
                            'proceed_payment' => true
                        ]
                    ], 201);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Failed to update item !',
                    ], 400);
                }
            

            }else{

                // Update process flag in all order
                $order = Order::where('user_code', '=', $usrCode)
                        ->update([
                            'process_flag' => 'false'
                        ]);

                if ($order) {
                    // Return flag to proceed to payment
                    return response()->json([
                        'success' => true,
                        'message' => 'Sorry, Item is Out of Stock !',
                        'data' => [
                            'proceed_payment' => false
                        ]
                    ], 201);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Failed to update order !',
                    ], 400);
                }

            }
           
        }

    }
    // End of Checkout


    /* Get order info
    * To give alert wether the item can or can't be proceed to payment
    * We can determine it with procees_flag parameter
    */
    public function getOrderInfo(Request $request){
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
            $userCode = $request->input('user_code');
            $itemCode = $request->input('item_code');

            $order = Order::where('user_code', $userCode)
                    ->where('item_code', $itemCode)
                    ->get();
    
            if ($order) {
                return response()->json([
                    'success' => true,
                    'message' => 'Order information',
                    'data' => $order
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to update order !',
                ], 400);
            }
        }
    }
    
}
