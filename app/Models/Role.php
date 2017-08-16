<?php

namespace Frank\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends Model
{
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function can(Permission $permission)
    {
        return $this->permissions()->find($permission->id) !== null;
    }
}
