<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Lingkungan\Entities\P1a;

class Unit extends Model
{
    use HasFactory;

    public function p1a(){
        return $this->hasMany(P1a::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
