<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Usuario extends Model implements Authenticatable
{
    protected $hidden = [
        'password',
    ];
    use HasFactory;
    public $timestamps = false;
    function getAuthIdentifierName() { return 'id';}
    function getAuthIdentifier(){ return $this->id;}
    function getAuthPassword(){ return $this->password;}
    function getRememberToken(){}
    function setRememberToken($token){}
    function getRememberTokenName(){}
}