<?php

namespace App\Http\Controllers;

use App\Models\Attach;
use Illuminate\Http\Request;

class AttachController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'price' => 'required',
            'quantity'=> 'required'
        ]);

        $attach = Attach::create($request->all());

        return view('', ['attach' => $attach]);
    }
}
