<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $table='offers';
    protected $fillable=['photo','name_ar','name_en','details_ar','details_en'];
    public $timestamps=false;
}
