<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index() {
        $order = \App\Models\Order::get();
        return view('Order.index', ['name'=>'Aja','sffsdfs'=>'sdfsdfsdf'])
                ->with('age',20)
                ->with('orders', $order);
    }
    
    public function save(Request $request, $id) {
        $input = $request->all();
        echo $input['name'];
        echo $input['email'];
        
        $name = $request->input('name');
        $email = $request->input('email');
        
        $order = new \App\Models\Order();
        $order->field['name'] = $name;
        $order->field['email'] = $email;
        $order->add();
    }
}
