<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaiKhoan extends Model
{
    //use SoftDeletes;
  
  protected	$table = 'cau_hoi';
  protected $dates = ['deleted_at'];
}
