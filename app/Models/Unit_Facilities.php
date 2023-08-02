<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit_facilities extends Model
{
    use HasFactory;
    protected $table="unit_facilities";
    public $timestamps=false;
    protected $fillable = [
        'unit_id',
        'facility_id',
    ];
    public function facilities()
    {
        return $this->belongsToMany(Facility_lists::class);
    }
}
