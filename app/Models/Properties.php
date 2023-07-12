<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $table="properties";
    protected $primarykey="property_id";
    public $timestamps=false;
    public function landlord()
    {
        return $this->belongsTo(Landlords::class);
    }
}
