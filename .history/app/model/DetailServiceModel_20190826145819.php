<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class DetailServiceModel extends Model
{
    protected $table = "BOOKING_DETAIL_SERVICE";
    protected $fillable = ["UUID_BOOKING", "UUID_SERVICE"];
}
