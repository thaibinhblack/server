<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class RoomModel extends Model
{
    protected $table = "BOOKING_ROOM";
    protected $fillable = ["UUID_ROOM", "UUID_STORE", "NAME_ROOM"];
}
