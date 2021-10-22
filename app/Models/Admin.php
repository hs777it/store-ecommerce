<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = "admins"; // مش شرط لو في التادابيز بنفس الاسم

    // protected $fillable = ['id'];
    protected $guarded=[]; // for all fields

    public $timestamps = true;
}
