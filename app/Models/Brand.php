<?php

namespace Frank\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
