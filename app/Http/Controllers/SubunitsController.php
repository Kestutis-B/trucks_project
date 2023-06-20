<?php

namespace App\Http\Controllers;

use App\Models\Subunits;
use App\Models\Trucks;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubunitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, int $trucksId)
    {
        $subunits = new Subunits();
        $subunits->user_id = Auth::user()->id;
        $subunits->subunit = $request->subunit;
        $subunits->trucks_id = $trucksId;
        $subunits->unit_number = $request->unit_number;
        $subunits->start_date = $request->start_date;
        $subunits->end_date = $request->end_date;

        $subunits->save();

        return redirect()->intended(route('trucks.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Subunits $subunits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subunits $subunits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id):RedirectResponse
    {
        $subunits = Subunits::findOrFail($id);
        $trucks = Trucks::findOrFail($subunits->trucks_id);
        $trucksId = $trucks->id;

//        $subunits->unit_number = $request->unit_number;
        $subunits->subunit = $request->subunit;
        $subunits->start_date = $request->start_date;
        $subunits->end_date = $request->end_date;
        $subunits->save();

        return redirect()->intended(route('trucks.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subunits $subunits)
    {
        //
    }
}
