<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PharmaciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pharmacies = Pharmacy::where('pharmacy_id', '=', Auth::guard('phm')->user()->id)->get();
        if (Auth::guard('admin')) {
            return view('admin.dashboard', compact('pharmacies'));
        }
        return view('admin.drugcp', compact('pharmacies'));
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
        //
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

    public function approve(Request $request, $id)
    {
        $pha = Pharmacy::find($id);
        $pha->approved = true;
        $save = $pha->save();
        if ($save) {
            return redirect()->back()->with('success', 'Pharmacy Has Been Approved Successfully');
        } else {
            return redirect()->back()->with('fail', 'Something Went Wrong');
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
        Pharmacy::destroy($id);
        return back()->with('success', 'Pharmacy Has Been Deleted Successfully');
    }
}
