<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('address');

        $properties = Property::where('Address', 'like', '%' . $keyword . '%')
            ->orWhere('PropertyName', 'like', '%' . $keyword . '%')
            ->get();

        return view('property', compact('properties'));
    }
}
