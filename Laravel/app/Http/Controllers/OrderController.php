<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;

class OrderController extends Controller
{
    //
    public function index(Request $request) {
        Session::put('FavoriteBook', 'Rich Dad Poor Dad');
        session(['FavoriteCar' => 'Mercedeez','FavoritePlace'=>'Rajasthan']);
        session(['user'=>['FavoriteCar' => 'Mercedeez','FavoritePlace'=>'Rajasthan']]);
//        Session::flash('key', 'value');
        
        
        $response = new \Illuminate\Http\Response('Hello World');
 
        $response->withCookie(cookie('name', 'aafa'));
        echo \Illuminate\Http\Request::cookie('laravel_session');

        Session::push('user.teams', 'developers');
        $order = \App\Models\Order::get();
        return view('Order.index', ['name'=>'Ajay'])
                ->with('age',20)
                ->with('orders', $order)
                ->with('users', []);
    }
    
    public function save(Request $request, $id) {
        
        
        echo '<br/>'.Session::get('FavoriteBook');
        echo '<br/>'.Session::get('FavoriteBookFSsdfds','Default Value');
        
        echo '<br/>Pull:'.Session::pull('FavoriteBook');
        $data = Session::all();
        echo "<pre>";
        print_r($data);
        exit;
        $input = $request->all();
        echo $input['name'];
        echo $input['email'];
        
        $name = $request->input('name');
        $email = $request->input('email');
       
        $order = new \App\Models\Order();
        $order->field['name'] = $name;
        $order->field['email'] = $email;
        $order->add();
        Session::regenerate();

    }
}
