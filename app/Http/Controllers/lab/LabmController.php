<?php

namespace App\Http\Controllers\lab;

use App\Http\Controllers\Controller;
use App\Models\HomeVisit;
use App\Models\Lab;
use App\Models\Labm;
use App\Models\TestMenu;
use App\Models\TestResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LabmController extends Controller
{
    public function index()
    {

        $HomeVisits = HomeVisit::where('lab_id', '=', Auth::guard('labm')->user()->id)->get();
        $TestResults = TestResult::all()->toArray();
        $TestMenus = TestMenu::where('lab_id', '=', Auth::guard('labm')->user()->id)->get();
        $labs = Lab::all()->toArray();
        $tests = TestMenu::where('lab_id', Lab::TestMenu());
        // dd(Auth::guard('labm')->user()->id);
        dd($tests);
        if (Auth::guard('labm')) {
            return view('admin.lapsuser', compact('HomeVisits'), compact('TestMenus'), compact('TestResults'), compact('tests'));
        } else {
            return view('dashboard.labm.login');
        }
    }

    function create(Request $request)
    {
        //Validate inputs
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:labm,email',
            'username' => 'required|unique:labm,username',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required|min:5|max:30',
            'cpassword' => 'required|min:5|max:30|same:password'
        ]);

        $Doc_user = new Labm();
        $Doc_user->fname = $request->fname;
        $Doc_user->lname = $request->lname;
        $Doc_user->email = $request->email;
        $Doc_user->username = $request->username;
        $Doc_user->phone = $request->phone;
        $Doc_user->address = $request->address;
        $Doc_user->password = \Hash::make($request->password);
        $save = $Doc_user->save();

        if ($save) {
            return redirect()->back()->with('success', 'You are now registered successfully as A Lab Manager');
        } else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to register');
        }
    }

    function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'username' => 'required|exists:labm,username',
            'password' => 'required|min:5|max:30'
        ]);

        $creds = $request->only('username', 'password');

        if (Auth::guard('labm')->attempt($creds)) {
            return redirect()->route('labm.home');
        } else {
            return redirect()->route('labm.login')->with('fail', 'Incorrect Credentials');
        }
    }

    function logout()
    {
        Auth::guard('labm')->logout();
        return redirect()->route('labm.login');
    }
}
