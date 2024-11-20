<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SkillCategoryCard extends Component
{
    public $categoryName;
    public $skills;
    public $printView;

    public function __construct($categoryName, $skills, $printView = false)
    {
        $this->categoryName = $categoryName;
        $this->skills = $skills;
        $this->printView = $printView;
    }

    public function render(): View|Closure|string
    {
        return view('components.skill-category-card');
    }
}
