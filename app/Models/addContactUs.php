<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class addContactUs extends Model
{

    protected $table = "contactUs";
    protected $fillable = ['address', 'phone', 'email', 'created_at', 'updated_at'];
    protected $hidden = ['created_at, updated_at'];
 }
