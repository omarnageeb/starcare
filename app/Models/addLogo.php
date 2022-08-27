<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class addLogo extends Model
{

    protected $table = "logo";
    protected $fillable = ['photo', 'created_at', 'updated_at'];
    protected $hidden = ['created_at, updated_at'];
 }
