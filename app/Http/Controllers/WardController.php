<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ward;
class WardController extends Controller
{
    public function list()
    {
        $district = Ward::with('blocks')->get();
        return $district;
    }
}
