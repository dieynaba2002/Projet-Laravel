<?php

namespace App\Http\Controllers;
use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index()
    {
        $projets = Projet::orderBy('id','desc')->paginate(5);
        return view('projets.index', compact('projets'));
    }

    public function create()
    {
        return view('projets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'dateDebut' => 'required',
            'dateFin' => 'required',
        ]);
        
        Projet::create($request->post());

        return redirect()->route('projets.index')->with('success','Projet créé avec succès.');
    }

    public function show($id)
    {
        $projet = Projet::find($id);
        return view('projets.show',compact('projet'));
    }
}
