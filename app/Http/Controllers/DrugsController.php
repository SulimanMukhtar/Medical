<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DrugsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drugs = Drug::where('pharmacy_id', '=', Auth::guard('phm')->user()->id)->get();
        return view('admin.drugcp', compact('drugs'));
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
        $drug = new Drug();
        $drug->pharmacy_id = $request->pharma_id;
        $drug->name = $request->name;
        $drug->quantity = $request->quantity;
        $drug->save();
        return back()->with('Drug_Added', 'Drug Has Been Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function find(Request $request)
    {
        $search_text = $request->input('query');

        $drugs = DB::table('drugs')
            ->where('name', '=', $search_text)->get();
        // dd($drugs);
        $attempt = DB::table('drugs')
            ->where('name', 'LIKE', '%' . $search_text . '%')->get();
        $attempts = $attempt->unique('name');
        // dd($attempts);
        $pharmacies = Pharmacy::with('drugs')->whereHas('drugs', function ($query) use ($search_text) {
            $query->where('name', 'LIKE', '%' . $search_text . '%');
        })->get();
        // dd($pharmacies);
        // ->where('id', '=', $drugs['pharma_id']);
        // return $pharmacies;
        return view('pages.drugs', compact('pharmacies', 'attempts', 'drugs'));
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
        $drug = Drug::find($id);
        $drug->name = $request->name;
        $drug->quantity = $request->quantity;
        $drug->save();
        return back()->with('Drug_Edited', 'Drug Has Been Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Drug::destroy($id);
        return back()->with('Drug_Deleted', 'Drug Has Been Deleted Successfully');
    }
}
