<?php

namespace Frank\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
        'start',
        'end'
    ];

    public function getDurationAttribute()
    {
        return $this->start->diffInDays($this->end);
    }
}
