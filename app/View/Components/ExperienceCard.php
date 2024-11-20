<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ExperienceCard extends Component
{
    public $companyName;
    public $role;
    public $dateFrom;
    public $dateTo;
    public $summaryPoints;
    public $printView;

    public function __construct($companyName, $role, $dateFrom, $dateTo, $summaryPoints, $printView = false)
    {
        $this->companyName = $companyName;
        $this->role = $role;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->summaryPoints = $summaryPoints;
        $this->printView = $printView;
    }

    public function render(): View|Closure|string
    {
        return view('components.experience-card');
    }
}
