<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table= 'product';
    public function category()
    {
        return $this->belongsTo('App\models\category', 'category_id', 'id');
    }
    public function value()
    {
        return $this->belongsToMany('App\models\value', 'value_product', 'product_id', 'value_id');
    }
}
