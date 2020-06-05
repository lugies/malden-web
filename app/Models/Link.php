<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = 'links';
    protected $primaryKey = 'id';
    protected $fillable = ['name' , 'image_path' , 'url' , 'lang_code'];
}
