<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class UserQuestionAnwser extends Model
{
    protected $table = "BOOKING_USER_QUESTION_ANWSER";
    protected $fillable = ["UUID_BOOKING", "UUID_ANWSER"];
}
