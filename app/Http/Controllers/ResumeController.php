<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\SkillCategory;

class ResumeController extends Controller
{
    public function buildResume()
    {
        $experiences = Experience::with('summaryPoints')->orderBy('date_from', 'desc')->get();
        $skillCategories = SkillCategory::with('skills')->get();

        return view('resume', compact('experiences', 'skillCategories'));
    }
}
