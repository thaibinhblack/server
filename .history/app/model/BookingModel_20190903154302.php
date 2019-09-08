<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class BookingModel extends Model
{
    protected $table = "BOOKING_BOOKINGS";
    protected $fillable = ["UUID_BOOKING", "UUID_STYLIST", "UUID_ROOM", "PHONE_BOOKING", "EMAIL_BOOKING", "NAME_BOOKING", "ACTION_BOOKING", "NOTIFY_TOKEN", "TIME_BOOK", "DATE_BOOK", "CODE", "NOTE_BOOKING","CHECK_BOOKING"];
}
