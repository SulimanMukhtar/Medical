<?php

namespace App\Http\Controllers;

use App\Models\TestMenu;
use Illuminate\Http\Request;

class TestMenus extends Controller
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
        ]);

        $labTest = new TestMenu();
        $labTest->lab_id = $request->lab_id;
        $labTest->test_name = $request->name;
        $save = $labTest->save();
        if ($save) {
            return redirect()->back()->with('success', 'A');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestMenu  $testMenu
     * @return \Illuminate\Http\Response
     */
    public function show(TestMenu $testMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestMenu  $testMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(TestMenu $testMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestMenu  $testMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestMenu $testMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestMenu  $testMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestMenu $testMenu)
    {
        //
    }
}
