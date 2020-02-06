<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show() {

        $array = ['title'=>'Laravel Project',
                  'data'=>[
                      'one'=>'List 1',
                      'two'=>'List 2',
                      'three'=>'List 3',
                      'four'=>'List 4',
                      'five'=>'List 5'
                  ],
                  'dataI'=>[
                      'List 1',
                      'List 2',
                      'List 3',
                      'List 4',
                      'List 5'

                  ],

                  'bvar'=>true,
                  'script'=>"<script>alert('hello')</script>"

            ];

        if(view()->exists('Test.index')) {

            return view('Test.index', $array);

        }

            abort(404);

        }

}
