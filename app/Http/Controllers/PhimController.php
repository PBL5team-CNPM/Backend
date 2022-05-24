<?php

namespace App\Http\Controllers;

use App\Models\phim;
use Illuminate\Http\Request;

class PhimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phim = phim::all();
        return response()->json($phim);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $phim = phim::create($data);

        return response()->json($phim);
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
        $phim = phim::find($id);
        if(is_null($phim)) {
            return response()->json(['message'=>'phim not found'], 404);
        }
        $phim->update($request->all());

        return response()->json($phim);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phim = phim::find($id);
        if(is_null($phim)) {
            return response()->json(['message'=>'phim not found'], 404);
        }
        $phim->delete();
        $phims = phim::all();
        
        return response()->json($phims);
    }
}
