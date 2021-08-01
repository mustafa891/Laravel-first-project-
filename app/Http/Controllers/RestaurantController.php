<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{

    public function index()
    {
        $foods = Food::all();
        return view('welcome', compact('foods'));
    }

    public function show($order)
    {
        $food = Food::FindOrfail($order);
        return view('restaurant.show', compact('food'));
    }

    public function lang($lang)
    {
        session()->put('locale',$lang);
        $lang == 'ku' ? session()->put('secondeLang', 'en') : session()->put('secondeLang', 'ku');
        return redirect()->back();
    }

}
