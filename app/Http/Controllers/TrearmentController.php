<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class TrearmentController extends Controller
{
    public function index(Request $request){
        $treatments = Treatment::all();
        return view('treatments.treatments',['treatments'=>$treatments]);
    }
}
