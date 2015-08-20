<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["quantidade", "finalizado"];

    //get the products that belongs to the order
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    //Get the user that owns the order
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
