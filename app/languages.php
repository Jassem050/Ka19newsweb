<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class languages extends Model
{
    protected $table = 'languages';

    protected $fillable = ['language_name'];

    protected $primaryKey = 'language_id';
}
