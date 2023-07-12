<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landlords extends Model
{
    use HasFactory;
    protected $table="landlords";
    protected $primarykey="user_id";
    public $timestamps=false;
    public function usertable()
    {
        return $this->belongsTo(Usertable::class);
    }
    public function property()
    {
        return $this->hasMany(Properties::class);
    }
}
