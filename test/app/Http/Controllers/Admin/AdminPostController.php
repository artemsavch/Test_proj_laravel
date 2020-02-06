<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
//use http\Client\Curl\User;
use App\Providers\onAddArticleEvent;
use App\Role;
use App\User;
//use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Gate;


class AdminPostController extends Controller
{

    // show form
    public function show() {


        return view('Test.addPost', [

            'title' => 'Новый материал, другалечек!'

        ]);


    }

    // new post
    public function create(Request $request) {

        $article = new Article;

        /*if(Gate::denies('add', $article)) {

            return redirect()->back()->with(['message' => 'У тебя нет прав, другалечек!']);

        }*/

        if($request->user()->cannot('add', $article)) {

            return redirect()->back()->with(['message' => 'У тебя нет прав, другалечек!']);

        }

        $this->validate($request, [
            'name' => 'required'
        ]);

        $user = Auth::user();
        $data = $request->all();

        $res = $user->articles()->create([
            'name' => $data['name'],
            'img' => $data['img'],
            'text' => $data['text']
        ]);

        Event::dispatch(new onAddArticleEvent($res, $user));


        return redirect()->back()->with('message', 'Материал добавлен, другалечек!');

    }
}
