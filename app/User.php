<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["nome",
        "sexo",
        "email",
        "cpf",
        "cep",
        "estado",
        "cidade",
        "bairro",
        "logradouro",
        "numero",
        "complemento"];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'admPower', 'remember_token'];

    //Get the comments of the user
    public function comments ()
    {
        return $this->hasMany('App\Comment');
    }

    //Get the orders of the user
    public function orders ()
    {
        return $this->hasMany('App\Order');
    }

    //Get the answers of the user
    public function answers ()
    {
        return $this->hasMany('App\Answer');
    }
}
