<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function list()
    {
        $district = District::with(['wards' => function ($query) {
            $query->select('id', 'districtID', 'name')->with(['blocks' => function ($query) {
                $query->select('id', 'wardID', 'name');
            }]);
        }])->get();
        return $district;
    }
}
