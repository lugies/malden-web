<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $fillable = ['name' , 'image_path' , 'desc' , 'lang_code'];
}
