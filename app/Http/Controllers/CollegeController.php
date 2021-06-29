<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\state;
use App\Models\college;

class CollegeController extends Controller
{
    public function home(){
        $states = state::all();
        $colleges = college::all();
        return view('home',['states'=>$states , "colleges"=>$colleges]);
    }

    public function insert(){
        $data = state::all();
        return view('insert',['states'=>$data]);
    }

    public function similarStateColleges($state_id){
        $states = state::all();
        $colleges = college::where("state_id",$state_id)->get();
        return view("home",['states'=>$states,'colleges'=>$colleges]);
    }


    public function viewColleges($id){
        $states = state::all();
        $college = college::where("id",$id)->get();
        return view("viewcollege",['states'=>$states,'college'=>$college]);
    }

    public function search(Request $req){
        $state = state::all();
        $colleges = college::where("name","like","%$req->search%")->get();

        return view("home",['states'=>$state,"colleges"=>$colleges]);
    }

    public function insertCollege(Request $req){
        $save_college = new college();

        $save_college->name = $req->name;
        $save_college->description = $req->description;
        $save_college->state_id = $req->state;
        $save_college->duration = $req->duration;
        $save_college->course = $req->course;

        $save_college->save();

        return redirect()->route('insert');
    }
}
