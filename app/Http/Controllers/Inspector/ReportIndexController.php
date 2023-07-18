<?php

namespace App\Http\Controllers\Inspector;

use App\Http\Controllers\Controller;
use App\Models\Offence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportIndexController extends Controller
{
    //


public function index()
{
    $inspectorId = Auth::user()->badgenumber;

    // Retrieve the offences reported by the current inspector
    $offences = Offence::where('InspectorBadgeNumber', $inspectorId)->get();


    return view('inspector.reports.index', compact('offences'));
}

    }

