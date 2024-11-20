<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillCategory extends Model
{
    protected $fillable = ['skill_category_name'];

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
