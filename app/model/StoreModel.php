<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class StoreModel extends Model
{
    protected $table = "BOOKING_STORE";
    protected $fillable = ["UUID_STORE", "UUID_COUNTRY", "NAME_STORE", "ADDRESS_STORE", "NUMBER_ROOM", "PHONE_STORE"];
}
