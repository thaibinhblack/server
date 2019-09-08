<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    protected $table = "BOOKING_SERVICE";
    protected $fillable = ["UUID_SERVICE", "NAME_SERVICE", "IMAGE_SERVICE", "CREATED_AT"];
}
