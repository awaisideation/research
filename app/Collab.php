<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collab extends Model
{
    protected $table="collab";
    protected $fillable = [
        'name', 'description'
    ];
}
