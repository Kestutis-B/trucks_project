<?php

namespace App\Http\Controllers;

use App\Models\Trucks;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TrucksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('trucks.trucks', ['trucks' => Trucks::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('trucks/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $trucks = new Trucks();
        $trucks->user_id = Auth::user()->id;
        $trucks->unit_number = $request->unit_number;
        $trucks->year = $request->year;
        $trucks->notes = $request->notes;

        $trucks->save();

        return redirect()->intended('/trucks');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trucks $trucks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $trucks = Trucks::findOrFail($id);

        return view('trucks.edit', [
            'truck' =>Trucks::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $trucks = Trucks::findOrFail($id);
        $trucks->notes = $request->notes;

        $trucks->save();
        return redirect()->intended(route('trucks.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Trucks::destroy($id);

        return redirect()->intended('/trucks');
    }
}
