<?php

namespace App\Http\Controllers;

use App\Models\SkillCategory;

class SkillController extends Controller
{
    public function showSkills()
    {
        $skillCategories = SkillCategory::with('skills')->get();

        return view('skills', compact('skillCategories'));
        //return response()->json($skillCategories);
    }
}
