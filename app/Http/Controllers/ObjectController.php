<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Username;

class ObjectController extends Controller
{
    public function CreateName(Request $request)
    {
        $input = $request->validate([
            'username'=>'required|string'
        ]);

        $crt = Username::create($input);

        return response()->json($crt);
    }
    public function ShowName(Request $request)
    {
        $show = Username::all();

        return response()->json($show);
    }
}
