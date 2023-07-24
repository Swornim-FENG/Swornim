<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility_lists extends Model
{
    use HasFactory;
    protected $table="facility_lists";
    protected $primaryKey="facility_id";
    public $timestamps=false;
}
