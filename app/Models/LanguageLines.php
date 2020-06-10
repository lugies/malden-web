<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LanguageLines extends Model
{
    protected $table = 'language_lines';
    protected $primaryKey = 'id';
    protected $fillable = ['group' , 'key', 'text'];
}
