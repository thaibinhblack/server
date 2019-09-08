<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ProvinceModel extends Model
{
    protected $table = "BOOKING_PROVINCE";
    protected $fillable = ["UUID_PROVINCE", "NAME_PROVICE"];
}
