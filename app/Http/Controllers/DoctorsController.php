<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

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
        return view('pages.doctors', compact('doctors'));
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
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'specialist' => 'required',
            'university' => 'required',
            'address' => 'required',
            'phone' => 'required|digits:10',
            'email' => 'required|email|unique:doctors,email',
            'username' => 'required|unique:doctors,username',
            'password' => 'required|min:5|max:30',
            'cpassword' => 'required|min:5|max:30|same:password'
        ]);
        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->specialist = $request->specialist;
        $doctor->university = $request->university;
        $doctor->phone = $request->phone;
        $doctor->email = $request->email;
        $doctor->username = $request->username;
        $doctor->address = $request->address;
        $doctor->password = \Hash::make($request->password);
        $nameW = basename($request->file('image')->getClientOriginalName(), '.' . $request->file('image')->getClientOriginalExtension());
        $extention = $request->file('image')->getClientOriginalExtension();
        $name = $nameW . rand(00000, 9999) . time() . '.' . $extention;
        $request->file('image')->move(public_path('/images/doctors/'), $name);
        $doctor->image = $name;
        $save = $doctor->save();
        if ($save) {
            return redirect()->back()->with('success', 'Your Doctor Account Has Been Registered Successfully');
        } else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to register');
        }
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
        if ($request->image) {
            $nameW = basename($request->file('image')->getClientOriginalName(), '.' . $request->file('image')->getClientOriginalExtension());
            $extention = $request->file('image')->getClientOriginalExtension();
            $name = $nameW . rand(00000, 9999) . time() . '.' . $extention;
            $request->file('image')->move(public_path('/images/doctors/'), $name);
            $doctor->image = $name;
        }
        $doctor->save();
        return redirect()->back()->with('success', 'Doctor Has Been Edited Successfully');
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
        return back()->with('success', 'Doctor Has Been Deleted Successfully');
    }
}
