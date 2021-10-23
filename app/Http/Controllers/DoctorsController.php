<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Lab;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all()->toArray();
        $labs = Lab::all()->toArray();

        if (url()->current() === url('Admin')) {
            return view('admin.dashboard', compact('doctors'), compact('labs'));
        } else {
            return view('pages.doctors', compact('doctors'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addDoctor()
    {
        return view('admin.AddDoctor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->specialist = $request->specialist;
        $doctor->university = $request->university;
        $doctor->phone = $request->phone;
        $nameW = basename($request->file('image')->getClientOriginalName(), '.' . $request->file('image')->getClientOriginalExtension());
        $extention = $request->file('image')->getClientOriginalExtension();
        $name = $nameW . rand(00000, 9999) . time() . '.' . $extention;
        $request->file('image')->move(public_path('/images/doctors/'), $name);
        $doctor->image = $name;
        $doctor->description = $request->description;
        $doctor->save();
        return back()->with('Doctor_Added', 'Doctor Has Been Added Successfully');
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
        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->specialist = $request->specialist;
        $doctor->university = $request->university;
        $doctor->phone = $request->phone;
        $nameW = basename($request->file('image')->getClientOriginalName(), '.' . $request->file('image')->getClientOriginalExtension());
        $extention = $request->file('image')->getClientOriginalExtension();
        $name = $nameW . rand(00000, 9999) . time() . '.' . $extention;
        $request->file('image')->move(public_path('/images/doctors/'), $name);
        $doctor->image = $name;
        $doctor->description = $request->description;
        $doctor->save();
        return back()->with('Doctor_Edited', 'Doctor Has Been Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::destroy($id);
        return back()->with('Doctor_Deleted', 'Doctor Has Been Deleted Successfully');
    }
}
