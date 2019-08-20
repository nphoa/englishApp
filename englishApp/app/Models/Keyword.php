<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    //
    protected $table = "keywords";
    public $timestamps = true;
    //
    protected $fillable = [
        'name',
        'id_type',
        'vietnamese'
    ];



}
