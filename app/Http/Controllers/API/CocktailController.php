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
}
