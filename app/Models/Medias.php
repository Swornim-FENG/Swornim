<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medias extends Model
{
    use HasFactory;
    protected $table="medias";
    protected $primaryKey="media_id";
    public function unit()
    {
        return $this->belongsTo(Units::class, 'unit_id');
    }
    public function property()
    {
        return $this->belongsTo(Properties::class, 'property_id');
    }
}
