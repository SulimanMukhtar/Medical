<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lab;


class LabsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labs = Lab::all()->toArray();
        return view('pages.labs', compact('labs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lab = new Lab();
        $lab->name = $request->name;
        $lab->location = $request->location;
        $lab->phone = $request->phone;
        $lab->description = $request->description;
        $nameW = basename($request->file('image')->getClientOriginalName(), '.' . $request->file('image')->getClientOriginalExtension());
        $extention = $request->file('image')->getClientOriginalExtension();
        $name = $nameW . rand(00000, 9999) . time() . '.' . $extention;
        $request->file('image')->move(public_path('/images/labs/'), $name);
        $lab->image = $name;
        $lab->save();
        return back()->with('Lab_Added', 'Lab Has Been Added Successfully');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $lab = Lab::find($id);
        $lab->name = $request->name;
        $lab->location = $request->location;
        $lab->phone = $request->phone;
        $lab->description = $request->description;
        $nameW = basename($request->file('image')->getClientOriginalName(), '.' . $request->file('image')->getClientOriginalExtension());
        $extention = $request->file('image')->getClientOriginalExtension();
        $name = $nameW . rand(00000, 9999) . time() . '.' . $extention;
        $request->file('image')->move(public_path('/images/labs/'), $name);
        $lab->image = $name;
        $lab->save();
        return back()->with('Lab_Edited', 'Lab Has Been Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lab::destroy($id);
        return back()->with('Lab_Deleted', 'Lab Has Been Deleted Successfully');
    }
}
