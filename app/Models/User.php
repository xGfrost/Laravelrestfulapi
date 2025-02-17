<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;

class User extends Model implements Authenticatable
{
    // protected $table = "users";
    // protected $PrimaryKey = "id";
    // protected $keyType = "int";
    // protected $timestamps = true;
    // protected $incrementing = true;

    // protected $fillable = [
    //     'username',
    //     'password',
    //     'name', 
    // ];

    // use HasApiTokens;

    protected $guarded = [];

    public function contacts(): HasMany{
        return $this->hasMany(Contact::class, "user_id", "id");
    }

    public function getAuthIdentifiername()
    {
        return 'username';
    }

    public function getAuthIdentifier()
    {
        return $this->username;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->token;
    }

    public function setRememberToken($value)
    {
        $this->token = $value;
    }

    public function getRememberTokenName()
    {
        return 'token';
    }

    

}
