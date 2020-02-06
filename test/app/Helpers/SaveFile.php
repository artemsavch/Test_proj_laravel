<?php

namespace App\Helpers;


use App\Helpers\Contracts\SaveStr;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Self_;

Class SaveFile implements SaveStr {


    public static function save(Request $request, User $user)
    {
        // TODO: Implement save() method.

        $obj = new self;

        $data = $obj->checkData($request->only('name', 'text'));

        $str = $data['name']. ' | ' . $data['text'];

        Storage::prepend('str.txt', $str);
    }

    public function checkData($array)
    {
        // TODO: Implement checkData() method.
        return $array;
    }
}



