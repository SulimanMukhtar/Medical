<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class Appointments extends Controller
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
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:appointments,email',
            'phone' => 'required',
            'address' => 'required',
            'date' => 'required',
            'gender' => 'required'
        ], [
            'email' => 'Already Submitted An Appointment , Please Wait for An Email For Confirmation'
        ]);

        $appointment = new Appointment();
        $appointment->Doc_id = $request->Doc_id;
        $appointment->fname = $request->fname;
        $appointment->lname = $request->lname;
        $appointment->email = $request->email;
        $appointment->phone = $request->phone;
        $appointment->address = $request->address;
        $appointment->date = $request->date;
        $appointment->gender = $request->gender;
        $save = $appointment->save();

        if ($save) {
            return redirect()->back()->with('success', 'A');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
