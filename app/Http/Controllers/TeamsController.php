<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Team;

class TeamsController extends Controller
{
    public function index() {
        $teams = Team::all();
        return view('teams.index', compact(['teams']));
    }
}