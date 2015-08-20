<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'photos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["nome", "imagem"];

    //Get the product that owns the photo
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
