<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all();
        return view('dashboard', compact('candidates'));
    }
    public function create()
    {
        return view('candidates.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('assets'), $imageName);
        $validatedData['image'] = $imageName;
        Candidate::create($validatedData);
        return redirect()->route('admin.dashboard')->with('success', 'Candidate created successfully.');
    }
    public function edit(Candidate $candidate)
    {
        return view('candidates.edit', compact('candidate'));
    }
    public function update(Request $request, Candidate $candidate)
    {
        $validatedData = $request->validate([
            'name' =>'required|string|max:255',
            'description' =>'required|string',
        ]);
        $candidate->update($validatedData);
        return redirect()->route('admin.dashboard')->with('success', 'Candidate updated successfully.');
    }
    public function destroy(Candidate $candidate)
    {
        $candidate->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Candidate deleted successfully.');
    }
}
