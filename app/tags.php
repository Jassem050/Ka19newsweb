<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    protected $table = 'tags';

    protected $fillable = ['language_id','tag_name'];

    protected $primaryKey = 'tag_id';
}
