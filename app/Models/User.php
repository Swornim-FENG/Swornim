<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Fullname',
        'email',
        'password',
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
        'password' => 'hashed',
    ];
    protected $table="users";
    protected $primaryKey="user_id";
    public $timestamps=false;
    public function tenant()
    {
        return $this->hasOne(Tenants::class);
    }
    public function landlord()
    {
        return $this->hasOne(Landlords::class);
    }
    public function properties()
    {
        
        return $this->hasMany(Properties::class, 'user_id');
    }
    public function units()
    {
        return $this->hasMany(Units::class, 'user_id');
    }
}
