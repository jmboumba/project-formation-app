<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Category;


class HomeController extends Controller
{

    public function redirect(){
        $userRole=Auth::user()->role;

        if($userRole=='1'){
            return view('home');
        }
        else{
            return view('admin.home');
        }
    }
}
