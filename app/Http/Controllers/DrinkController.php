<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;
use App\Models\Drinks;

class DrinkController extends Controller
{
    public function index()
    {
        return Drinks::all();
    }

    public function store(Request $request)
    {
        $drink = Drinks::create($request->all());
        return response()->json($drink, 201);
    }

    public function update(Request $request,  Drinks $drink)
    {
        $drink->update($request->all());
        return response()->json($drink, 200);
    }

    public function delete(Drinks $drink)
    {
        $drink->delete();
        return response()->json(null, 204);
    }

    public function getInfo($idDrink)
    {
        return Drinks::find($idDrink);
    }

    public function updateInfo($idDrink)
    {
        return Drinks::find($idDrink);
    }

    public function destroy(Drinks $idDrink)
    {
        $res = $idDrink->delete();

        if ($res) {
            return response()->json(['message' => 'Post delete succesfully']);
        }

        return response()->json(['message' => 'Error to update post'], 500);
    }

}
