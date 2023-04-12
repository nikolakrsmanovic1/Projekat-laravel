<?php

namespace App\Http\Controllers;
use App\Models\Izabranic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IzabraniciController extends Controller
{

    public function vote(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        $id = $request->input('id');
        $izabranik = Izabranic::find($id);
        $izabranik->br_glasova = $izabranik->br_glasova + 1;
        $izabranik->save();
    }
}
