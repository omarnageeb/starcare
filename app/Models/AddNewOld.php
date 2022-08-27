<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class AddNew extends Model
{
    use HasTranslations;
    Public $translatable = ['name', 'details'];
    protected $table = "news_old";
    protected $fillable = [
        'name',
        'photo',
        'date',
        'details',
        'created_at',
        'updated_at'
    ];
    protected $hidden = ['created_at, updated_at'];
 }


