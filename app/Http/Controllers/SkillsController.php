<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skills;

class SkillsController extends Controller
{
    //

    public function index()
    {
        $skills = Skills::all();

        return view('skills.index', compact('skills'));
    }

    public function edit(Skills $skill) //Wildcard search primary key
    {

        return view('skills.edit', compact('skill'));
    }

}
