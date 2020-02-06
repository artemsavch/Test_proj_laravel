<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function getIndex($page) {

        echo __METHOD__;

    }

    public function getCreate() {

    echo __METHOD__;

}

}
