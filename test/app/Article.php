<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'text',
        'img',
        'Picture',
        'user_id '
    ];


    protected $casts = [

        'name' => 'boolean',
        'text' => 'array'

    ];

    public function user() {

        return $this->belongsTo(User::class);

    }

    public function getNameAttribute($value) { // метод читателя

//        return 'Hello World - ' . $value . ' - Hello World';
        return  $value;

    }

    public function setNameAttribute($value) {

        $this->attributes['name'] = $value;

    }

}
