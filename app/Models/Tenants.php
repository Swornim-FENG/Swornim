<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenants extends Model
{
    use HasFactory;
    protected $table="tenants";
    protected $primarykey="user_id";
    public $timestamps=false;
    public function usertable()
    {
        return $this->belongsTo(Usertable::class);
    }
}
