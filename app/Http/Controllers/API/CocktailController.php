<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    public function cocktails()
    {
        return response()->json([
            'status' => 'success',
            'cocktails' => Cocktail::all()
        ]);
    }

    public function analcoholic()
    {
        return response()->json([
            'status' => 'success',
            'analcoholic' => Cocktail::where('category', 'Non-Alcoholic')->get()
        ]);
    }
    public function alcoholic()
    {
        return response()->json([
            'status' => 'success',
            'alcoholic' => Cocktail::where('category', 'Alcoholic')->get()
        ]);
    }
}
