<?php

namespace App\Http\Controllers\hq;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drivers = Driver::all();

        return view('hq.drivers.index', compact('drivers'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
 

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {
        return view('hq.drivers.edit', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'idnumber' => 'required|string',
            'licencenumber' => 'required|string',
            'phonenumber' => 'required|string',
            'bloodgroup' => 'required|string',
            'dob' => 'required|string',
            
        ]);

        $driver->update($validatedData);

        return redirect()->route('hq.drivers.index')->with('status', 'driver-info-updated-successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
        //
        $driver->delete();
        return redirect()->route('hq.drivers.index')->with('status', 'driver-account-deleted');

    }
}
