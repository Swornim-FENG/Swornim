<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landlords extends Model
{
    use HasFactory;
    protected $table="landlords";
    protected $primaryKey="user_id";
    public $timestamps=false;
    public function user()
    {
        return $this->belongsTo(Userstable::class);
    }
    public function property()
    {
        return $this->hasMany(Properties::class);
    }
}
