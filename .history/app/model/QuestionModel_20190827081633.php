<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class QuestionModel extends Model
{
    protected $table = "BOOKING_QUESTION";
    protected $fillable = ["UUID_QUESTION", "NAME_QUESTION"];
}
