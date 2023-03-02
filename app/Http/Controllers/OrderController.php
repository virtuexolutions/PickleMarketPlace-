<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Order;
use Spatie\Permission\Models\Role;
use Carbon;
class OrderController extends Controller
{
    public function index()
    {
        $userid =  Auth::user()->roles['0']->pivot->role_id;
        $role = Role::find($userid)->name;
		if($role != 'Admin')
        {   
            $products = Order::where('user_id',Auth::user()->id)->get();
        }
        else
        {
            $products = Order::get();
        }
	    return view('orders.index')->with('products',$products);
    }
    
    public function show($id)
    {
        $data['order'] = Order::find($id);
        // return date(now());

        return view('orders.show',$data);
        
    }
}
