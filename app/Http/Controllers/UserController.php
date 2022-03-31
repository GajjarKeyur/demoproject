<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Shop;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function list()
    {
        $user = User::with('shops')->get();
        return $user;
    }

    public function list1(Request $request)
    {
        $search = $request->search;
        // $user = User::with(['shops' => function ($query) use ($search) {
        //     $query->select('id', 'name', 'userID', 'blockID')
        //         ->where('name', 'Like','%'.$search.'%');
        // }])->get();

        $user = User::whereHas('shops', function ($query) use ($search) {
            $query->where('name', 'Like', '%' . $search . '%');
        })->with(['shops' => function ($query) use ($search) {
            $query->select('id', 'name', 'userID', 'blockID')
                ->where('name', 'Like', '%' . $search . '%');
        }])->get();

        return $user;
    }

    public function letest()
    {
        $user = USer::with('shop')->get();
        return $user;
    }
    
    public function maxItems()
    {
        $user = User::with('maximum')->get();
        return $user;
    }

    public function countShop()
    {
        $user = User::withCount('shops')->get();
        return $user;
    }

    public function sumItem()
    {
        $user = User::withSum('shops','items')->get();

        return $user;
    }
}
