<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    /**
     *  Attributes that are mass assignable.
     *  @var array
     */
    protected $fillable = [
        'product_id',
        'user_id',
    ];
}