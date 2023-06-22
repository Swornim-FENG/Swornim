<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usertable extends Model
{
    use HasFactory;
    protected $table="user";
    protected $primarykey="user_id";
    
}
