<?php

namespace App\Models;

use App\Models\Role;
use Laravel\Sanctum\HasApiTokens;
use Modules\Lingkungan\Entities\P1a;
use Modules\Lingkungan\Entities\P1b;
use Modules\Lingkungan\Entities\P2b;
use Modules\Lingkungan\Entities\P2c;
use Modules\Lingkungan\Entities\P2d;
use Modules\Lingkungan\Entities\P3a;
use Modules\Lingkungan\Entities\P3b;
use Modules\Lingkungan\Entities\P4a;
use Modules\Lingkungan\Entities\P5a;
use Modules\Lingkungan\Entities\P5b;
use Modules\Lingkungan\Entities\P5c;
use Modules\Lingkungan\Entities\P5d;
use Modules\Lingkungan\Entities\P5e;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'unit',
        'alamat',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the role that owns the user.
     *
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function p1a(){
        return $this->belongsTo(P1a::class);
    }

    public function p1b(){
        return $this->belongsTo(P1b::class);
    }

    public function p2a(){
        return $this->belongsTo(P2b::class);
    }

    public function p2b(){
        return $this->belongsTo(P2b::class);
    }

    public function p2c(){
        return $this->belongsTo(P2c::class);
    }

    public function p2d(){
        return $this->belongsTo(P2d::class);
    }

    public function p3a(){
        return $this->belongsTo(P3a::class);
    }

    public function p3b(){
        return $this->belongsTo(P3b::class);
    }

    public function p4a(){
        return $this->belongsTo(P4a::class);
    }

    public function p5a(){
        return $this->belongsTo(P5a::class);
    }

    public function p5b(){
        return $this->belongsTo(P5b::class);
    }

    public function p5c(){
        return $this->belongsTo(P5c::class);
    }

    public function p5d(){
        return $this->belongsTo(P5d::class);
    }

    public function p5e(){
        return $this->belongsTo(P5e::class);
    }

    public function p6a(){
        return $this->belongsTo(P5e::class);
    }

    public function p7a(){
        return $this->belongsTo(P5e::class);
    }

    public function p7b(){
        return $this->belongsTo(P5e::class);
    }

    public function p7c(){
        return $this->belongsTo(P5e::class);
    }

    public function p8a(){
        return $this->belongsTo(P5e::class);
    }

    public function p9a(){
        return $this->belongsTo(P5e::class);
    }

}
