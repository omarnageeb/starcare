<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class addPartners extends Model
{

    protected $table = "partners";
    protected $fillable = ['photo', 'created_at', 'updated_at'];
    protected $hidden = ['created_at, updated_at'];
 }
