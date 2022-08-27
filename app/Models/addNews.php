<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/*
use Spatie\Translatable\HasTranslations;
*/

class addNews extends Model
{
    /*
    use HasTranslations;
    Public $translatable = ['name', 'details'];
    */
    protected $table = "news";
    protected $fillable = [
        'name_ar',
        'name_en',
        'photo',
        'date',
        'details_en',
        'details_ar',
        'created_at',
        'updated_at'
    ];
    protected $hidden = ['created_at, updated_at'];
 }
