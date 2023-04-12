<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Glasac;

class GlasaciController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function store(Request $request)
    {
        $glasac = new Glasac;        
        $request->validate([
            'ime' => 'required|max:255',
            'jmbg' => 'required|max:14',

        ]);
        $ime = $request->input('ime');
        $jmbg = $request->input('jmbg');
        if (Glasac::where('JMBG', $jmbg)->exists()) 
        {
            return redirect()->back()->with('error', 'Glasač sa ovim JMBG-om je već glasao!');
        }
        $glasac->Ime = $ime;
        $glasac->JMBG = $jmbg;
        $glasac->save();
        return view('glasanje');
    }
}
