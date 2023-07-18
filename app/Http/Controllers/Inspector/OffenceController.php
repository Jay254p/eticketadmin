<?php

namespace App\Http\Controllers\Inspector;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\Offence;
use App\Models\Offencelist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OffenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        // $search = $request->input('search');
        // $driver=Driver::when($search, function ($query, $search) {
        //     return $query->where('licencenumber', 'like', '%'.$search.'%');
        // })->paginate(10);
        // return view('inspector.offence.index', compact('driver', 'search'));

        {
            $search = $request->input('search');
        
            $drivers = Driver::when($search, function ($query, $search) {
                return $query->where('licencenumber', 'like', '%'.$search.'%');
            })->paginate(10);
        
            return view('inspector.offence.index', compact('drivers', 'search'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        //
        return view('inspector.offence.register-offence', compact('user','driver'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Driver $driver)
    {
        $validatedData = $request->validate([
            'DriverName' => ['required', 'string', 'max:255'],
            'DriverPhoneNumber' => ['required', 'string', 'max:255'],
            'DriverLicenceNumber' => ['required', 'string', 'max:255'],
            'DriverCarRegNo' => ['required', 'string', 'max:255'],
            'PlaceOfOffence' => ['required', 'string', 'max:255'],
            'OffenceCommited' => ['required', 'string', 'max:255'],
            'InspectorBadgeNumber' => ['required', 'string', 'max:255'],
        ]);
    

        Offence::create([
            'TicketId' =>Str::random(8),
            'DriverName' =>$validatedData['DriverName'],
            'DriverPhoneNumber' => $validatedData['DriverPhoneNumber'],
            'DriverLicenceNumber' => $validatedData['DriverLicenceNumber'],
            'DriverCarRegNo' => $validatedData['DriverCarRegNo'],
            'PlaceOfOffence' => $validatedData['PlaceOfOffence'],
            'OffenceCommited' => $validatedData['OffenceCommited'],
            'InspectorBadgeNumber' => $validatedData['InspectorBadgeNumber'],
   
        ]);
            $offences= Offence::all();
            return to_route('inspector.reports.index', compact('offences'))->with('status', 'driver-reported');
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        //        
        $isEditable = false;

        $offencelists = Offencelist::all();
        return view('inspector.offence.driver-show', compact('driver', 'offencelists', 'isEditable'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
