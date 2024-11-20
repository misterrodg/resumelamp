<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SkillCategoryCard extends Component
{
    public $categoryName;
    public $skills;

    public function __construct($categoryName, $skills)
    {
        $this->categoryName = $categoryName;
        $this->skills = $skills;
    }

    public function render(): View|Closure|string
    {
        return view('components.skill-category-card');
    }
}
