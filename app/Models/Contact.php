<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $fillable = ['mail','phone','phone_2','adress','adress2','info','latitude','longitude','lang_code'];
}
