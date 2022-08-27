<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class addClients extends Model
{

    protected $table = "clients";
    protected $fillable = ['photo', 'description_ar', 'description_en', 'created_at', 'updated_at'];
    protected $hidden = ['created_at, updated_at'];
 }
