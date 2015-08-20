<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["titulo", "conteudo"];

    //Get the answers of the comment
    public function answers ()
    {
        return $this->hasMany('App\Answer');
    }

    //Get the user that owns the comment
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Get the product that owns the answer
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
