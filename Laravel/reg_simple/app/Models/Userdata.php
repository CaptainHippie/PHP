<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdata extends Model
{
    use HasFactory;
    protected $table = 'userdata';
    protected $primaryKey = 'id';
    protected $fillable = ['fullname','email','mobile','username','password'];
}

