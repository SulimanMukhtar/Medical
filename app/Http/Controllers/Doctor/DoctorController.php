<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

use App\Models\Doc_user;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function index()
    {

        $appointments = Appointment::where('Doc_id', '=', Auth::guard('doctor')->user()->id)->get();

        if (Auth::guard('doctor')) {
            return view('admin.doctorcp', compact('appointments'));
        } else {
            return view('dashboard.doctor.login');
        }
    }

    // function create(Request $request)
    // {
    //     //Validate inputs
    //     $request->validate([
    //         'fname' => 'required',
    //         'lname' => 'required',
    //         'email' => 'required|email|unique:Doc_users,email',
    //         'username' => 'required|unique:Doc_users,username',
    //         'phone' => 'required',
    //         'address' => 'required',
    //         'password' => 'required|min:5|max:30',
    //         'cpassword' => 'required|min:5|max:30|same:password'
    //     ]);

    //     $Doc_user = new Doc_user();
    //     $Doc_user->fname = $request->fname;
    //     $Doc_user->lname = $request->lname;
    //     $Doc_user->email = $request->email;
    //     $Doc_user->username = $request->username;
    //     $Doc_user->phone = $request->phone;
    //     $Doc_user->address = $request->address;
    //     $Doc_user->password = \Hash::make($request->password);
    //     $save = $Doc_user->save();

    //     if ($save) {
    //         return redirect()->back()->with('success', 'You are now registered successfully as Doctor');
    //     } else {
    //         return redirect()->back()->with('fail', 'Something went Wrong, failed to register');
    //     }
    // }

    function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'username' => 'required|exists:doctors,username',
            'password' => 'required|min:5|max:30'
        ]);

        $creds = $request->only('username', 'password');

        if (Auth::guard('doctor')->attempt($creds)) {
            return redirect()->route('doctor.home');
        } else {
            return redirect()->route('doctor.login')->with('fail', 'Incorrect Credentials');
        }
    }

    function logout()
    {
        Auth::guard('doctor')->logout();
        return redirect()->route('doctor.login');
    }
}
