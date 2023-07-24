<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $table="properties";
    protected $primaryKey="property_id";
    public $timestamps=false;
    public function landlord()
    {
        return $this->belongsTo(Landlords::class);
    }
    public function user()
    {
       
        return $this->belongsTo(User::class, 'user_id');
    }
    public function units()
    {
        return $this->hasMany(Units::class, 'property_id');
    }

    public function medias()
    {
        return $this->hasManyThrough(Medias::class, Units::class, 'property_id', 'unit_id');
    }
}
