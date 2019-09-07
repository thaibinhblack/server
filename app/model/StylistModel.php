<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class StylistModel extends Model
{
    protected $table = "BOOKING_STYLIST";
    protected $fillable = ["UUID_STYLIST", "NAME_STYLIST", "URL_STYLIST"];
}
