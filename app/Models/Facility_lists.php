<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility_lists extends Model
{
    use HasFactory;
    protected $table="facility_lists";
    protected $primarykey="facility_id";

}