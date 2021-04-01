<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ads extends Model
{
    protected $table = 'ads';

    protected $fillable = ['ad_title','ad_content','ad_image','ad_date','ad_time','ad_duration','ad_status'];

    protected $primaryKey = 'ad_id';
}
