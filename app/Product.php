<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["nome",
        "categoria",
        "especificacao",
        "preco",
        "qtdEstoque"];

    //get the photo of the product
    public function photo()
    {
        return $this->hasOne('App\Photo');
    }

    //get the comments of the product
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    //get the orders that belongs to the product
    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
}
