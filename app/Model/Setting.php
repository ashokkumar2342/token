<?php

namespace App\Model;

use App\Model\Minu;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable=['id',];
    protected $table='app_setting';
    public $timestamps=false;
}

