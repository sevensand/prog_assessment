<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assessment extends Model
{
    protected $fillable = ['user_id', 'name', 'url', 'created_date', 'last_push_date', 'description', 'no_of_star'];
    public $timestamps = false;
}
