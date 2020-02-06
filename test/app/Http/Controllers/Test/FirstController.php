<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function show ($id = null) {

        echo __METHOD__;

        echo '<br>';
        echo $id;

    }
}
