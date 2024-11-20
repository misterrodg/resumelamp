<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['skill_category_id', 'skill_name', 'rating'];

    public function skillCategories()
    {
        return $this->belongsTo(SkillCategory::class);
    }
}
