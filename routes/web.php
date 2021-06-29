<?php

use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StateController;
use Illuminate\Support\Facades\Route;

route::get('/',[CollegeController::class,"home"])->name('homepage');

route::get('/insert',[CollegeController::class,"insert"])->name("insert");

route::post('/insert/state',[StateController::class,"insertState"])->name("insertstate");
route::post('/insert/college',[CollegeController::class,"insertCollege"])->name("insertcollege");


route::get('view/colleges/{id}',[CollegeController::class,"viewColleges"])->name("viewcollege");

route::get('show/state/colleges/{state_id?}',[CollegeController::class,"similarStateColleges"])->name("similar_state_college");


route::get("search/college",[CollegeController::class,"search"])->name("search");
