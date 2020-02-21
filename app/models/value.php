<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class value extends Model
{
    protected $table= 'value';
    public $timestamps=false;
    public function attribute()
    {
        return $this->belongsTo('App\models\attribute', 'attr_id', 'id');
    }
}
