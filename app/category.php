<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['category_name','category_image','category_status','language_id','language_name'];

    protected $primaryKey = 'category_id';
}
