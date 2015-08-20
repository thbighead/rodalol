<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'texts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["pagina", "conteudo"];
}
