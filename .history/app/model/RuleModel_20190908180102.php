<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class RuleModel extends Model
{
    protected $table = "booking_rule";
    protected $fillable = ["UUID_RULE", "NAME_RULE"];
}
