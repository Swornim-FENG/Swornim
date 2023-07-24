<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;
    protected $table="units";
    protected $primaryKey="unit_id";
    public $timestamps=false;
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function medias()
    {
        return $this->hasMany(Medias::class, 'unit_id');
    }
    public function property()
    {
        return $this->belongsTo(Properties::class,'property_id');
    }
}
