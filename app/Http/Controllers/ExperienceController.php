<?php

namespace App\Http\Controllers;

use App\Models\Experience;

class ExperienceController extends Controller
{
    public function showExperience()
    {
        $experiences = Experience::with('summaryPoints')->orderBy('date_from')->get();

        return view('history', compact('experiences'));
    }
}
