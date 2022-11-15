<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add_Blog extends Model
{
    use HasFactory;

    protected $table='add_blogs';

    protected $fillable=['title','description','image_path','topic','publish_status'];
}
