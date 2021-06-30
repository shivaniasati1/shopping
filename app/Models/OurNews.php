<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurNews extends Model
{
    use HasFactory;

    public $table = "news";

    protected $guarded = [];
}
