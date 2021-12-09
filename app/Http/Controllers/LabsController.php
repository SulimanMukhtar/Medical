<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lab;
use App\Models\TestMenu;
use Illuminate\Support\Facades\Auth;

class LabsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labs = Lab::with('TestMenu')->get();
        $TestMenus = TestMenu::all()->toArray();
        // dd($labs);
        return view('pages.labs', compact('labs'), compact('TestMenus'));

        // return Lab::find(1)->TestMenu()->get();
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
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|digits:10',
            'email' => 'required|email|unique:doctors,email',
            'username' => 'required|unique:doctors,username',
            'password' => 'required|min:5|max:30',
            'cpassword' => 'required|min:5|max:30|same:password'
        ]);

        $lab = new Lab();
        $lab->name = $request->name;
        $lab->address = $request->address;
        $lab->phone = $request->phone;
        $lab->email = $request->email;
        $lab->username = $request->username;
        $lab->password = \Hash::make($request->password);
        $nameW = basename($request->file('image')->getClientOriginalName(), '.' . $request->file('image')->getClientOriginalExtension());
        $extention = $request->file('image')->getClientOriginalExtension();
        $name = $nameW . rand(00000, 9999) . time() . '.' . $extention;
        $request->file('image')->move(public_path('/images/labs/'), $name);
        $lab->image = $name;
        $save = $lab->save();
        if ($save) {
            return redirect()->back()->with('success', 'Your Lab Account Has Been Registered Successfully');
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
        $lab = Lab::find($id);
        $lab->name = $request->name;
        $lab->address = $request->address;
        $lab->phone = $request->phone;
        // $lab->email = $request->email;
        // $lab->username = $request->username;
        // $lab->password = \Hash::make($request->password);
        if ($request->image) {
            $nameW = basename($request->file('image')->getClientOriginalName(), '.' . $request->file('image')->getClientOriginalExtension());
            $extention = $request->file('image')->getClientOriginalExtension();
            $name = $nameW . rand(00000, 9999) . time() . '.' . $extention;
            $request->file('image')->move(public_path('/images/labs/'), $name);
            $lab->image = $name;
        }
        $lab->save();
        return back()->with('success', 'Lab Has Been Edited Successfully');
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
        return back()->with('success', 'Lab Has Been Deleted Successfully');
    }
    function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'username' => 'required',
            'password' => 'required'
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
