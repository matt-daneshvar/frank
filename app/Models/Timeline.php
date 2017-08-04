<?php

namespace Frank\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    public function activities()
    {
        return $this->hasMany(Activity::class)->orderBy('start');
    }

    public function getStartAttribute()
    {
        $start = Carbon::maxValue();

        foreach($this->activities as $activity)
        {
            if($start->gt($activity->start))
            {
                $start = $activity->start;
            }
        }

        return $start;
    }

    public function getEndAttribute()
    {
        $end = Carbon::minValue();

        foreach($this->activities as $activity)
        {
            if($end->lt($activity->end))
            {
                $end = $activity->end;
            }
        }

        return $end;
    }

    public function getDurationAttribute()
    {
        return $this->end->diffInDays($this->start);
    }
}
