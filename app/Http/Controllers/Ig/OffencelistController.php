<?php

namespace App\Http\Controllers\Ig;

use App\Http\Controllers\Controller;

use App\Models\Offencelist;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OffencelistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() :View
    {
        $offencelists = Offencelist::all();
        return view('ig.offencelist.index', compact('offencelists'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request)
    {
        return view('ig.offencelist.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'offencename' => ['required', 'string', 'max:255', 'unique:'.Offencelist::class],
            'offencetype' => ['required', 'string', 'max:255'],
            'offencefine' => ['required', 'string', 'max:255'],
            'createdby' => ['required', 'string', 'max:255'],
        ]);

        $user = Offencelist::create([
            'offencename' => $request->offencename,
            'offencetype' => $request->offencetype,
            'offencefine' => $request->offencefine,
            'createdby' => $request->createdby,
        ]);
        return to_route('ig.offencelist.index')->with('status', 'Category-Created-Successfully.');
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
    public function edit(Offencelist $offencelist)
    {
        return view('ig.offencelist.edit', compact('offencelist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offencelist $offencelist)
    {
        //
        $validatedData = $request->validate([
            'offencename' => 'required|string',
            'offencetype' => 'required|string',
            'offencefine' => 'required|string',
        ]);

        $offencelist->update($validatedData);

        return redirect()->route('ig.offencelist.index')->with('status', 'Offence-updated-successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offencelist $offencelist)
    {
        //
        $offencelist->delete();

        return redirect()->route('ig.offencelist.index')->with('status', 'offencelist-deleted');
    }
}
