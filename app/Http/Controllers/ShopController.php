<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function list(Request $request)
    {   
        $shop = Shop::with('user.block')->get();
        return $shop;
    }

    public function list1(Request $request)
    {   
        $shop = Shop::with('user.block');

        $search = $request->search;
            $shop = $shop->where(function ($query) use ($search) {
                $query->where('name','Like','%'.$search.'%');
            })->get();
        return $shop;
    }

    // public function sumItems()
    // {
    //     $sum = Shop::all()->sum('items');
    //     return $sum;
    // }
}
