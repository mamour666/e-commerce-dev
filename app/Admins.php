<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Admins extends Model implements Authenticatable {
    
    protected $fillable = ['email','password'];
    
    use BasicAuthenticatable;
}