<?php

namespace App\Http\Controllers\phm;

use App\Http\Controllers\Controller;
use App\Models\Drug;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhmController extends Controller
{
    public function index()
    {

        $drugs = Drug::where('pharmacy_id', '=', Auth::guard('phm')->user()->id)->get();
        $pharmacies = Pharmacy::with('drugs')->get();

        if (Auth::guard('phm')) {
            return view('admin.drugcp', compact('drugs'));
        } else if (Auth::guard('admin')) {
            return view('admin.dashboard', compact('drugs', 'pharmacies'));
        } else {
            return view('dashboard.phm.login');
        }
    }

    function create(Request $request)
    {
        //Validate inputs
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|digits:10',
            'email' => 'required|email|unique:pharmacies,email',
            'username' => 'required|unique:pharmacies,username',
            'password' => 'required|min:5|max:30',
            'cpassword' => 'required|min:5|max:30|same:password'
        ]);

        $phm = new Pharmacy();
        $phm->name = $request->name;
        $phm->username = $request->username;
        $phm->address = $request->address;
        $phm->phone = $request->phone;
        $phm->approved = false;
        $phm->email = $request->email;
        $phm->password = \Hash::make($request->password);
        $save = $phm->save();

        if ($save) {
            return redirect()->back()->with('success', 'Your Pharmacy Account Has Been Registered Successfully');
        } else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to register');
        }
    }

    function update(Request $request, $id)
    {
        $phm = Pharmacy::find($id);
        $phm->name = $request->name;
        $phm->address = $request->address;
        $phm->phone = $request->phone;
        $phm->email = $request->email;
        $save = $phm->save();

        if ($save) {
            return redirect()->back()->with('success', 'Pharmacy Account Updated Successfully');
        } else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to register');
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
        if (Auth::guard('phm')->attempt($creds)) {
            return redirect()->route('phm.home');
        } else {
            return redirect()->route('phm.login')->with('fail', 'Incorrect credentials');
        }
    }

    function logout()
    {
        Auth::guard('phm')->logout();
        return redirect()->route('phm.login');
    }
}
