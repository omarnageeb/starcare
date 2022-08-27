<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class addSolutions extends Model
{

    protected $table = "solutions";
    protected $fillable = ['name_ar', 'name_en', 'photo', 'icon', 'details_ar', 'details_en', 'created_at', 'updated_at'];
    protected $hidden = ['created_at, updated_at'];
 }
