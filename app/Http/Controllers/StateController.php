<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\state;

class StateController extends Controller
{
    public function insertState(Request $req){
        $save_state = new state();

        $save_state->state = $req->state;

        $save_state->save();

        return redirect()->route('insert');
    }
}
