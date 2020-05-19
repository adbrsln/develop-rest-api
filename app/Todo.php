<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';
    protected $guard = ['id'];
    protected $dates = ['created_at'];
}
