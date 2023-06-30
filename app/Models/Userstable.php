<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Userstable extends Model
{
    use HasFactory;
    protected $table="users";
    protected $primarykey="user_id";
    public $timestamps=false;
    public function tenant()
    {
        return $this->hasOne(Tenants::class);
    }
}

