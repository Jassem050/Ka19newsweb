<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class writers extends Model
{
    protected $table = 'writers';

    protected $fillable = ['writer_id','writer_name','writer_location','writer_mobile','writer_image','writer_email','writer_password','writer_status'];

    protected $primaryKey = 'news_id';
}
