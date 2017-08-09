<?php

namespace Frank\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['name', 'url'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
