<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AdminUpdatePostController extends Controller
{
    public function show(Request $request, $id) {

        $article = Article::find($id);

        return view('Test.updatePost', [

            'title' => 'Редактирование материала, другалек!',
            'article' => $article

        ]);

    }

    public function create(Request $request) {

        $this->validate($request, [

            'name' => 'required'

        ]);

        $user = Auth::user();

        $data = $request->except('_token');

        $article = Article::find($data['id']);

//        $this->authorize('update', $article);
        $this->authorizeForUser($user,'update', $article);

//        if (Gate::/*forUser(8)->*/allows('update', $article)) {
//        if ($request->user()->can('update', $article)) {
            $article->name = $data['name'];
            $article->img = $data['img'];
            $article->text = $data['text'];

            $res = $user->articles()->save($article);

            return redirect()->back()->with('message', 'Материал обновлен, другалечек!');

//        }

        return redirect()->back()->with(['message' => 'У тебя нет прав, другалек!']);

    }
}
