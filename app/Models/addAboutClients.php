<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class addAboutClients extends Model
{

    protected $table = "aboutClient";
    protected $fillable = ['photo', 'title_ar', 'title_en', 'details_ar', 'details_en', 'created_at', 'updated_at'];
    protected $hidden = ['created_at, updated_at'];
 }
