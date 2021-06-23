<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Painting extends Model
{
    protected $table = "painting";
    public $timestamps = true;
    protected $primaryKey = "painting_id";
    protected $guarded = [];
}