<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use HasFactory ,SoftDeletes;

    protected $fillable = ['name','key','table_name'];

    protected $dates = ['deleted_at'];

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }
}
