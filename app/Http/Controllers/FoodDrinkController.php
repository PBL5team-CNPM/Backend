<?php

namespace App\Http\Controllers;

use App\Models\food_drink;
use Illuminate\Http\Request;

class FoodDrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food_drinks = food_drink::all();
        return response()->json($food_drinks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        food_drink::create($request->all());
        return response()->json(food_drink::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $food_drink = food_drink::find($id);
        if(is_null($food_drink)) {
            return response()->json(['message'=>'food_drink not found not found'], 404);
        }
        $food_drink->update($request->all());
        return response()->json(food_drink::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food_drink = food_drink::find($id);
        if(is_null($food_drink)) {
            return response()->json(['message'=>'theloai not found'], 404);
        }
        $food_drink->delete();
        $food_drinks = food_drink::all();
        
        return response()->json($food_drinks);
    }
}
