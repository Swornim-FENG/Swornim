<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rates extends Model
{
    use HasFactory;
    protected $table="tenant";
    protected $primarykey="user_id";
    protected $fillable = ['firstName', 'lastName'];
}
