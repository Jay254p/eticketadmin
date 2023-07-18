<?php

namespace App\Http\Controllers\Judge;

use App\Http\Controllers\Controller;
use App\Models\Appeal;
use App\Models\Offence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JudgeIndexController extends Controller
{
    //

    public function index(){
        $judgeBadgenumber = Auth::user()->badgenumber;

    // Fetch the appeals assigned to the judge based on their badgenumber
    $appeals = Appeal::where('badgenumber', $judgeBadgenumber)->get();
    
        return view('judge.index',compact('appeals'));
    }

    // public function show( $id)
    // {   
    //     $driver = Auth::user()->licencenumber;

    //     $appeal = Appeal::findOrFail($id);

    // return view('judge.show', compact('appeal', ));
    // }
    public function show($id)
    {
        $appeal = Appeal::findOrFail($id);

        // Get the driver's license number from the appeal
        $driverLicenseNumber = $appeal->licencenumber;

        // Fetch the driver's offenses history based on the license number
        $driverOffencesHistory = Offence::where('DriverLicenceNumber', $driverLicenseNumber)->get();

        return view('judge.show', compact('appeal', 'driverOffencesHistory'));
    }

    public function edit($id)
    {
        $appeal = Appeal::findOrFail($id);
        return view('judge.edit', compact('appeal'));
    }

    public function update(Request $request, $id)
    {
        $appeal = Appeal::findOrFail($id);

        // Validate the input data
        $request->validate([
            'verdict' => 'required',
            'status' => 'required',
        ]);

        // Update the appeal with the new data
        $appeal->update([
            'verdict' => $request->input('verdict'),
            'status' => $request->input('status'),
        ]);

        // Redirect back to the appeal details page with a success message
        return redirect()->route('judge.appeal.show', $appeal->id)->with('success', 'Appeal updated successfully.');
    }
}