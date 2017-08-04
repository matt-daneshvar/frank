<?php

namespace Frank\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function stakeholders()
    {
        return $this->belongsToMany(User::class, 'project_user', 'project_id', 'user_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function links()
    {
        return $this->hasMany(Link::class);
    }

    public function timeline()
    {
        return $this->hasOne(Timeline::class);
    }
}
