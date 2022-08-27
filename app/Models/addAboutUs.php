<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class addAboutUs extends Model
{

    protected $table = "aboutUs";
    protected $fillable = ['photo', 'title_ar', 'title_en', 'description_ar', 'description_en', 'created_at', 'updated_at'];
    protected $hidden = ['created_at, updated_at'];
 }
