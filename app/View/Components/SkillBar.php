<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SkillBar extends Component
{
    public $skillName;
    public $rating;
    public $max;
    public $printView;

    public function __construct($skillName, $rating, $max = 10, $printView = false)
    {
        $this->skillName = $skillName;
        $this->rating = $rating;
        $this->max = $max;
        $this->printView = $printView;
    }

    public function render(): View|Closure|string
    {
        return view('components.skill-bar');
    }
}
