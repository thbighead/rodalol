<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'answers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["conteudo"];

    //Get the user that owns the answer
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Get the comment that owns the order
    public function comment()
    {
        return $this->belongsTo('App\Comment');
    }
}
