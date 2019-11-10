<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Admin extends Model
{
     use SoftDeletes;
  protected	$table = 'admin';
  protected $dates = ['deleted_at'];
}
