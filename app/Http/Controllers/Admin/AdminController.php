<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Drug;
use App\Models\Lab;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {

        // $doctors = Doctor::where('approved', '=', true)->get();
        $doctors = Doctor::all()->toArray();
        $labs = Lab::all()->toArray();
        $pharmacies = Pharmacy::all()->toArray();
        $drugs = Drug::all()->toArray();

        if (Auth::guard('admin')) {
            return view('admin.dashboard', compact('doctors'), compact('labs'), compact('pharmacies'), compact('drugs'));
        } else {
            return view('dashboard.admin.login');
        }
    }
    function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $creds = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($creds)) {
            $doctors = Doctor::all()->toArray();
            $labs = Lab::all()->toArray();
            $pharmacies = Pharmacy::all()->toArray();
            $drugs = Drug::all()->toArray();
            return redirect()->route('admin.home')->with(compact('doctors'), compact('labs'), compact('pharmacies'), compact('drugs'));
        } else {
            return redirect()->route('admin.login')->with('fail', 'Incorrect credentials');
        }
    }

    // public function Add_Doctor(Request $request)
    // {
    //     $doctor = new Doctor();
    //     $doctor->name = $request->name;
    //     $doctor->specialist = $request->specialist;
    //     $doctor->university = $request->university;
    //     $doctor->phone = $request->phone;
    //     $nameW = basename($request->file('image')->getClientOriginalName(), '.' . $request->file('image')->getClientOriginalExtension());
    //     $extention = $request->file('image')->getClientOriginalExtension();
    //     $name = $nameW . rand(00000, 9999) . time() . '.' . $extention;
    //     $request->file('image')->move(public_path('/images/doctors/'), $name);
    //     $doctor->image = $name;
    //     $doctor->approved = true;
    //     $doctor->description = $request->description;
    //     $doctor->save();
    //     return back()->with('Doctor_Added', 'Doctor Has Been Added Successfully');
    // }

    // public function Add_Lab(Request $request)
    // {
    //     $lab = new Lab();
    //     $lab->name = $request->name;
    //     $lab->location = $request->location;
    //     $lab->phone = $request->phone;
    //     $lab->description = $request->description;
    //     $nameW = basename($request->file('image')->getClientOriginalName(), '.' . $request->file('image')->getClientOriginalExtension());
    //     $extention = $request->file('image')->getClientOriginalExtension();
    //     $name = $nameW . rand(00000, 9999) . time() . '.' . $extention;
    //     $request->file('image')->move(public_path('/images/labs/'), $name);
    //     $lab->image = $name;
    //     $lab->save();
    //     return back()->with('Lab_Added', 'Lab Has Been Added Successfully');
    // }

    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
