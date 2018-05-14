<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skills;
use Carbon\Carbon;

class SkillsController extends Controller
{
    //

    public function index()
    {
        $skills = Skills::all();

        return view('skills.index', compact('skills'));
    }

    public function create()
    {
        return view('skills.create');
    }

    public function edit(Skills $skill) //Wildcard search primary key
    {

        return view('skills.edit', compact('skill'));
    }

    public function store()
    {

        $skill = new Skills;

        $skill->user_id = 1; //Will change to user who added skill once authentication is implemented.

        // Note To Self: Change migration so that column is 'name' instead of 'skill'
        $skill->skill = request('skillName');
        $skill->level = request('skillLevel');
        $skill->created_at = Carbon::now()->format('Y-m-d H:i:s');

        $skill->save();

        return redirect('/skills');

    }

}
