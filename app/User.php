<?php

namespace App;

use Illuminate\Foundation\Auth\User as BaseUser;
use Illuminate\Contracts\Auth\CanResetPassword;

use App\Militar;
use App\Entidade;
use Illuminate\Database\Eloquent\Model;
//use DB;

class User extends BaseUser
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'tipo', 'password'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*public function getNomeProprioMilitarAttribute(){
        // $militar = Militar::findOrFail(1);
        // if ($militar->count()==1) {
        //     return $militar->apelido;
        // }
        // return "desconhecido";

        $militar = Militar::whereRaw('user_id=?', [$this->id]);
        if ($militar->count()==1) {
             return $militar->first()->nomeProprio;
        }
        return "desconhecido";
    }*/

    public function getNomeProprioMilitarAttribute(){
        $militar = Militar::whereRaw('user_id=?', [$this->id]);
        if ($militar->count()==1) {
             return $militar->first()->nomeProprio;
        }
        return "";
    }

    /*public function getNomeApelidoMilitarAttribute(){
        $militar = Militar::whereRaw('user_id=?', [$this->id]);
        if ($militar->count()==1) {
            return $militar->first()->apelido;
        }
        return "desconhecido";
        //$militar = Militar::whereRaw('user_id=?', [$this->id]);
        //return $militar->apelido;
  }*/

    public function getNomeApelidoMilitarAttribute(){
        $militar = Militar::whereRaw('user_id=?', [$this->id]);
        if ($militar->count()==1) {
            return $militar->first()->apelido;
        }
        return "";
  }

  public function getNomeInativoAttribute(){
    if($this->inativo ==0){
      return "Ativo";
    }else{
      return "Inativo";
    }
  }

  public function getTiposCompletoMilitarAttribute(){
    return Enumeraveis::getTiposFromKey($this->tipo);
  }


 /*public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = \Hash::make ($password);
        //$password = bcrypt('secret');
        //$password = Hash::make('secret');
    }*/





}