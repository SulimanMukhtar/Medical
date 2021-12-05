<?php

namespace App\Http\Controllers\phm;

use App\Http\Controllers\Controller;
use App\Models\Drug;
use App\Models\phm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhmController extends Controller
{
    public function index()
    {

        $drugs = Drug::all()->toArray();

        if (Auth::guard('phm')) {
            return view('admin.drugcp', compact('drugs'));
        } else {
            return view('dashboard.phm.login');
        }
    }

    function create(Request $request)
    {
        //Validate inputs
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:phms,email',
            'username' => 'required|unique:phms,username',
            'password' => 'required|min:5|max:30',
            'cpassword' => 'required|min:5|max:30|same:password'
        ]);

        $phm = new Phm();
        $phm->name = $request->name;
        $phm->email = $request->email;
        $phm->username = $request->username;
        $phm->password = \Hash::make($request->password);
        $save = $phm->save();

        if ($save) {
            return redirect()->back()->with('success', 'You are now registered successfully as Pharmacy Manager , Login And Add A Pharmacy');
        } else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to register');
        }
    }

    function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:5|max:30'
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
