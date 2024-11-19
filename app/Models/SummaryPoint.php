<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SummaryPoint extends Model
{
    protected $fillable = ['experience_id', 'content'];

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }
}
