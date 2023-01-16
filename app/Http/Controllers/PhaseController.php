<?php

namespace App\Http\Controllers;
use App\Models\Phase;
use Illuminate\Http\Request;

class PhaseController extends Controller
{
    public function index()
    {
        $phases = Phase::orderBy('id','desc')->paginate(5);
        return view('phases.index', compact('phases'));
    }

    public function create()
    {
        return view('phases.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'duree' => 'required',
            'priorite' => 'required',
        ]);
        
        Phase::create($request->post());

        return redirect()->route('phases.index')->with('success','Phase cree avec succes.');
    }

}
