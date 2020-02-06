<?php

 namespace App\Helpers;


 use App\Helpers\Contracts\SaveStr;
 use App\User;
 use Illuminate\Http\Request;
 use phpDocumentor\Reflection\Types\Self_;

 Class SaveEloquentOrm implements SaveStr {


     public static function save(Request $request, User $user)
     {
         // TODO: Implement save() method.

         $obj = new self;

         $data = $obj->checkData($request->only('name', 'text'));

         $user->articles()->create($data);
     }

     public function checkData($array)
     {
         // TODO: Implement checkData() method.
         return $array;
     }
 }

