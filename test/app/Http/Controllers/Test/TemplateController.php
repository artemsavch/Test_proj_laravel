<?php

namespace App\Http\Controllers\Test;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class TemplateController extends Controller
{

    public function show() {

        if(view()->exists('Test.about')) {

//            $articles = DB::select("SELECT * FROM `articles` WHERE id = :id", ['id'=>4]);
//            dump($articles);

// Добавление инф в базу данных

            /*DB::insert("INSERT INTO `articles` (`name`, `text`, `img`, `Picture`) VALUES (?, ?, ?, ?)", [
                'test 1',
                'TEXT',
                'imgtTest',
                'pictureTest'
            ]);*/

//            $result = DB::connection()->getPdo()->lastInsertId();

// Refresh data

//            $result = DB::update("UPDATE `articles` SET `name` = 'TEST 2' WHERE `id` = ?", ['Test 2', 5]);


//            DB::statement("DROP table `articles`");




//            $articles = DB::select("SELECT * FROM `articles`");

//            dump($result);
//            dump($articles);

// удаление записей


//            $articles = Article::all();
//            foreach ($articles as $article) {
//                if ($article->id >= 6 && $article->id <= 17){
//                    $article->delete();
//                }
//            }
//           $result = Article::destroy([]);
           $result = DB::delete("DELETE FROM `pages` WHERE `id` = :id", [5]);

//            dump($result);
//            dump($articles);


            $page = DB::select("SELECT `name`, `text` FROM `pages` WHERE `alias` = :alias", ['alias'=>'about']);

            return view('Test.about', [

                'title'=>'About Us',
                'pages'=>$page[0]

            ]);

        }
        abort(404);

    }









    /*public function show(){

//        return 'hello'; // ответ приложения на поставленный запрос

        if(view()->exists('Test.about')) {

            $view = view('Test.about')->withTitle('About')->render();
            /*return (new Response($view))
                ->header('Content-Type', 'newType')
                ->header('Header-One', 'Header');


            return response($view)
                ->header('Content-Type', 'newType')
                ->header('Header-One', 'Header');*/

//            return response()->json(['name'=>'Hello', 'name1'=>'Hello1']);

//            return response()->view('Test.about', ['title'=>'About']);

//            return response()->download('robots.txt', 'mytext.txt', ['headerOne'=>'hello', 'hearedTwo'=>'World']);

            /*return response($view)->withHeaders([

                'headerOne'=>'Hello',
                'headerTwo'=>'World'

            ]);*/

//            return redirect('/')->withInput();
//            return redirect()->route('index.show');
//            return redirect()->action('Test\ContactController@show' );

//            return redirect('/articles')->with('param1', 'Hello'); // реализация редиректа на определенную страницу, и в сессию запишем необходимые параметры

//            return RedirectResponse::create('/articles');

//                return view('Test.about', [
/*
                    'title'=>'About',

                ]);

            }

            abort(404);*/


//    }



}
