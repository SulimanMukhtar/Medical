<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Patients extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|digits:10',
            'test' => 'required',
            'date' => 'required|after:tomorrow',
        ], [
            'date' => 'The Selected Date Must Not Be Tomorrow'
        ]);

        $patient = new Patient();
        $patient->lab_id = $request->lab_id;
        $patient->name = $request->name;
        $patient->phone = $request->phone;
        $patient->test_name = $request->test;
        $patient->address = $request->address;
        $patient->date = $request->date;
        $save = $patient->save();
        if ($save) {
            return redirect()->back()->with('success', 'Your Data Has Been Submitted Successfully ');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong');
        }
    }

    public function addPatient(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|digits:10',
            'test' => 'required',
        ]);
        $patient = new Patient();
        $patient->lab_id = $request->lab_id;
        $patient->name = $request->name;
        $patient->phone = $request->phone;
        $patient->test_name = $request->test;
        $patient->address = $request->address;
        $lap2char = DB::table('labs')->select('name')->where('id', '=', $request->lab_id)->pluck('name');
        $pid = substr($lap2char, 2, 2);
        $pid = strtoupper($pid);
        $pid = $pid . time() . rand(000, 999) . 'M';
        $patient->pid = $pid;
        $save = $patient->save();
        if ($save) {
            return redirect()->back()->with('success', 'Patient Added Successfully ');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong');
        }
    }

    public function givePID(Request $request, $id)
    {
        $pids = Patient::find($id);
        $lap2char = DB::table('labs')->select('name')->where('id', '=', $request->lab_id)->pluck('name');
        $pid = substr($lap2char, 2, 2);
        $pid = strtoupper($pid);
        $pid = $pid . time() . rand(000, 999) . 'M';
        $pids->pid = $pid;

        $pids->save();
        return back()->with('success', 'PID Given Successfully');
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
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|digits:10',
        ]);
        $patient = Patient::find($id);
        $patient->name = $request->name;
        $patient->phone = $request->phone;
        $patient->address = $request->address;
        $save = $patient->save();
        if ($save) {
            return redirect()->back()->with('success', 'Patient Updated Successfully ');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patient::destroy($id);
        return back()->with('success', 'Patient Has Been Deleted Successfully');
    }
}
