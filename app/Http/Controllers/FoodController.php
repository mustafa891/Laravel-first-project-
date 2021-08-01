<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::all();
        return view('manager.food.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manager.food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $food = Food::create($this->validation());
        $this->storeImage($food);
        return back()->with('msg', 'Food has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        return view('manager.food.edit', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        $food->update($this->validation());
        $this->storeImage($food);
         return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        $this->authorize('admin');
        $food->delete();
        return redirect()->back();
    }

    public function storeImage($food)
    {
        if (request()->hasFile('image')) {
            $food->update([
                'image' => request()->file('image')->store('uploads','public'),
            ]);

            $image = Image::make('storage/'.$food->image)->fit(351,234);
            $image->save();
        }
    }

    public function validation()
    {
        return request()->validate([
            'name' => ['required'],
            'price' => ['required'],
            'image' => ['sometimes', 'mimes:png,jpg,jpeg', 'file', 'max:5000'],
            'desc' => ['required'],
        ]);
    }
}
