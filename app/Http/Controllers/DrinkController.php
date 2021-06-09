<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function showDrink()
    {
        $drinks = Drink::all();
        return view('drinks.allDrink', compact('drinks'));
    }

    public function create()
    {
        return view('drinks.create');
    }

    public function store(Request $request)
    {
        $drink = new Drink();
        $drink->name = $request->input('name');
        $drink->price = $request->input('price');

        $drink->save();

        return redirect()->route('drink.all');
    }

    public function editDrink($id)
    {
        $drink = Drink::find($id);
        return view('drinks.edit', compact('drink'));

    }

    public function updateDrink(Request $request, $id)
    {
        $drink = Drink::find($id);
        $drink->name = $request->input('name');
        $drink->price = $request->input('price');
        $drink->save();
        return redirect()->route('drink.all');
    }

    public function destroyDrink($id)
    {
        $drink = Drink::find($id);
        $drink->delete();
        return redirect()->route('drink.all');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $drinks = Drink::where('name', 'like', '%' . $search . '%')->get();
        return view('drinks.allDrink', compact('drinks'));
    }
}
