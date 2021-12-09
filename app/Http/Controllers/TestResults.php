<?php

namespace App\Http\Controllers;

use App\Models\TestResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestResults extends Controller
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
        // dd($request);

        $request->validate([
            'requester' => 'required',
            'result' => 'required'
        ], [
            'requester', 'Please Select A Patient',
            'result', 'Please Upload a Result File'
        ]);
        $name = 'R-' . rand(00000, 9999) . time() . 'M.' . 'pdf';
        $request->file('result')->move(public_path('/results/'), $name);

        $result = TestResult::updateOrCreate(['requester' => $request->requester], ['test_result' => $name, 'lab_id' => $request->lab_id]);

        if ($result) {
            return redirect()->back()->with('success', 'Result Has Been Submitted Successfully');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestResult  $testResult
     * @return \Illuminate\Http\Response
     */
    public function show(TestResult $testResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestResult  $testResult
     * @return \Illuminate\Http\Response
     */
    public function edit(TestResult $testResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestResult  $testResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestResult $testResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestResult  $testResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestResult $testResult)
    {
        //
    }


    public function download(Request $request)
    {
        $file = DB::table('TestResults')->select('test_result')->where('requester', '=', $request->pid)->pluck('test_result')->first();
        return response()->download(public_path('results/' . $file));
    }
}
