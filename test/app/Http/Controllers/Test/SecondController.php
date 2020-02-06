<?php

namespace App\Http\Controllers\Test;

use App\Article;
use App\Country;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use CreateRolesTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SecondController extends Controller
{

    protected static $articles;

    public function __construct() {

//        $this->middleware('mymiddle');

    }

    public static function addArticles($array) {

        return self::$articles[] = $array;
    }

    public function getArticles(Request $request) {

//        $articles = DB::table('articles')->get();
//        $articles = DB::table('articles')->first();
//        $articles = DB::table('articles')->value('name');
        /*DB::table('articles')->orderBy('name')->chunk(2, function ($articles) {

            foreach ($articles as $article) {

                SecondController::addArticles($article);

            }

        });*/
//        dump(self::$articles);

//        $articles = DB::table('articles')->pluck('name');
//        $articles = DB::table('articles')->count();
//        $articles = DB::table('articles')->max('id');

//        $articles = DB::table('articles')->distinct()->select('name')->get();

//        $query = DB::table('articles')->select('name');


        // WHERE id - operator - value (exmpl: id = 5)
//        $articles = $query->addSelect('text As full text')->get();
        /*$articles = DB::table('articles')->select('name' ,'text As full text')
                        ->where('id', '=', 4)
                        ->where('name', 'like', 'Sample%')
                        ->get();*/

       /* $articles = DB::table('articles')->select('name' ,'text As full text')
            ->where([
                        ['id', '=', 4],
                        ['name', 'like', 'Sample%']
                    ])
            ->get();


        dump($articles);*/

//       $articles = DB::table('articles')->get();

//        $articles = Article::all();
//        $articles = Article::where('id', '>', 3)->orderBy('name')->take(2)->get();

/*        Article::chunk(2, function ($articles) {

        });*/

//        $article = Article::find(1);
//        $article = Article::where('id', '=', 1)->first();

//        $articles = Article::find([1, 2, 3]);


//        $article =  Article::findOrFail(100);
//        $article =  Article::where('id', '=', 100)->findOrFail(1);

//        $article = Article::orderBy('id', 'desc')->first();
//        $article->update([
//            'img' => '',
//            'Picture' => null,
//        ]);
//        dd($article);
//
//        $article = new Article();
//
//        $article->name = 'New Article';
//        $article->text = 'New Text';
//        $article->img = '';
//        $article->Picture = '';
//
//        $article->save(); // save new data to the data base

        /*foreach ($articles as $article) {
                echo $article->text . '<br />';
        }*/


//            $articles = Article::all();
//            foreach ($articles as $article) {
//                if ($article->id >= 18 && $article->id <= 30){
//                    $article->delete();
//                }
//            }

//        $articles = Article::first()->delete();

//        Article::create(
//
//            [
//                'name' => 'Hello World',
//                'text' => 'Some text',
//                'img' => 'pic1337.jpg',
//                'Picture' => 'Picture1'
//            ]
//
//        );
//        $articles = Article::orderBy('id', 'desc')->first()->delete();


//        Article::firstOrCreate([
//
//            'name' => 'Hello World1',
//            'text' => 'Some text',
//            'img' => 'pic1337.jpg',
//            'Picture' => 'Picture1'
//
//        ]);

//        $article = Article::find(36);

//        $article->delete();



//        $articles = Article::withTrashed()->get();
//        $articles = Article::onlyTrashed()->restore();



//        foreach ($articles as $article) {
//
//            if($article->trashed()) {
//
//                echo $article->name . ' - Deleted <br>';
//                $article->restore();
//
//            }
//            else {
//
//                echo $article->name . ' - Not-deleted <br>';
//
//            }
//
//        }


//        User::create([
//
//            'name' => 'Victor',
//            'email' => 'admin@admin.com',
//            'password' => 'admin'
//
//        ]);


//        Country::create([
//
//            'name' => 'Ukraine',
//            'user_id' => 1
//
//        ]);

//        $user = User::find(1);

//        $country = Country::find(1);

//        $country = $user->country;


//        $user = User::first();
//
//        $articles = Article::all();
//
//        if ($user) {
//
//            foreach ($articles as $article) {
//
//                $article->update([
//                    'user_id' => $user->id
//
//            ]);
//                echo $article->name . '<br>';
//
//            }
//        }

//        dump($articles);

//        $user = User::find(1);



//        dump($user->articles);
//        dump($country->user);




//        $article = Article::first();
//
//        dump($article->user->name);


//        $user = User::find(1);

//        $role = $user->roles()->where('roles.id', 2)->first();

//        $role = Role::find(1);

//        foreach ($user->roles as $role) {
//
//            echo $role->name . '<br>';
//
//        }

//        dump($user->roles);
//        dump($role->users);


//        $articles = Article::all();

// реализация жадной загрузки

//        $articles = Article::with('user')->get(); // with для загрузки связанных таблиц

//        foreach ($articles as $article) {
//
////            dump($article->user);
//
//            echo $article->user->name . '<br>';
//
//        }
// Еще вариант реализации жадной загрузки

//        $articles = Article::all();
//
//
//        $articles->load('user'); // метод load() исспольз. для дозагрузки в существ. коллекцию необходимых связанных данных
//
//        foreach ($articles as $article) {
//
////            dump($article->user);
//
//            echo $article->user->name . '<br>';
//
//        }

//И еще вариант реализации жадной загрузки

//        $articles = Article::all();

//        $users = User::with('articles', 'roles')->get();



//        $articles->load('user'); // метод load() исспольз. для дозагрузки в существ. коллекцию необходимых связанных данных

//        foreach ($users as $user) {
//
//            dump($user->articles);
//            dump($user->roles);
//
////            echo $article->user->name . '<br>';
//
//        }

//        dump($articles);

//        $users = User::has('articles', '>=', '1')->get();
//
//        foreach ($users as $user) {
//
//            dump($user);
//
//        }


// Добавление и удаление данных, которые связаны между собой

//
//        $user = User::first();
//
        /*$article = new Article([

            'name' => 'New Article',
            'text' => 'Some Text lalala',
            'img' => 'Some pic.jpg',
            'Picture' => 'Some Picture'

        ]);*/

//        $user->articles()->where('id', 33)->update(['name' => 'New text text text']);


//        $user->articles()->save($article);


        /*$role = new Role([

            'name' => 'guest'

        ]);

        $user->roles()->save($role);*/


/*        $user->articles()->saveMany([

            new Article([

                'name' => 'New Article Test1',
                'text' => 'Some Text lalala Test1',
                'img' => 'Some pic.jpg Test1',
                'Picture' => 'Some Picture Test1'

            ]),
            new Article([

                'name' => 'New Article Test2',
                'text' => 'Some Text lalala Test2',
                'img' => 'Some pic.jpg Test2',
                'Picture' => 'Some Picture Test2'

            ]),
            new Article([

                'name' => 'New Article Test3',
                'text' => 'Some Text lalala Test3',
                'img' => 'Some pic.jpg Test3',
                'Picture' => 'Some Picture Test3'

            ])

        ]); */





//        $user->articles()->create([
//
//            'name' => 'New Article111',
//            'text' => 'Some Text lalala111',
//            'img' => 'Some pic.jpg111',
//            'Picture' => 'Some Picture111'
//
//        ]);

//        $articles = Article::find(33);
//        dump($articles);

       /* User::create([

            'name' => 'Valera',
            'email' => 'valera@testValera.com',
            'password' => 'valera'

        ]);*/



//        $country = Country::first();
//        $user = User::orderBy('id', 'desc')->first();
//
//
//        $country->user()->associate($user);
//        $country->save();



       /* $user = User::orderBy('id', 'desc')->first();

        $user->articles()->create([

            'name' => 'Article about Valera',
            'text' => 'Valera the best',
            'img' => 'ValeraPic.jpg',
            'Picture' => 'Piture of Valeriy'

        ]);*/



        /*$articles = Article::all();
        $user = User::orderBy('id', 'desc')->first();

        foreach ($articles as $article) {

            $article->user()->associate($user);
            $article->save();

        }*/

//        $user = User::orderBy('id', 'desc')->first();
//        $role_id = Role::find(2)->id;
//
////        $user->roles()->attach($role_id);
//        $user->roles()->detach($role_id);
//
//

//        $article = Article::find(42);

//        $article->name = 'Some text';

//        echo $article->name;

//        dump($article);


        $article = Article::find(41);

//        $arr = ['key' => 'Hello world!'];

//        $article->text = $arr;

//        $article->save();

//        dump($article->toJson());
        dump((string) $article);

        return;





    }

    public function getArticle($id) {

        echo 'This is article num: ' . $id;

    }
}
