<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    //書き換えを許可するカラム
    protected $fillable = [
      'product_key',
      'product_name',
      'expire_date',
      'is_notify',
      'assigned_to',
      'customer_id'
    ];
}
