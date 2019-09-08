<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    protected $table = "BOOKING_COUNTRY";
    protected $fillable = ["UUID_COUNTRY", "UUID_PROVINCE", "NAME_COUNTRY"];
}
