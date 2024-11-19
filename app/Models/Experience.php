<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['company_name', 'role', 'date_from', 'date_to'];

    public function summaryPoints()
    {
        return $this->hasMany(SummaryPoint::class);
    }
}
