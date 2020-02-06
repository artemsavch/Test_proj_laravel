<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class  User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'login'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function country() {

        return $this->hasOne(Country::class, 'user_id', 'id'); // метод сообщает, что модель пользователя связывается с одной единственной записью определенной другой модеди

    }

    public function articles() {

        return $this->hasMany(Article::class, 'user_id', 'id');

    }

    public function roles() {

        return $this->belongsToMany(Role::class);

    }

}
