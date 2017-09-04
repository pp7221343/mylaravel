<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin_user';

    protected $fillable = ['id','user','password','name'];
}
