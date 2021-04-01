<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = 'news';

    protected $fillable = ['category_id','admin_id','language_id','news_title','news_content','news_image','news_image_caption','news_place','news_breaking','news_breaking_time','news_date','news_time','news_views','news_status'];

    protected $primaryKey = 'news_id';
}
