<?php

use App\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // 1 sposob seedinga dannix
        DB::insert('INSERT INTO `articles` (`name`, `text`, `img`, `Picture`) VALUES (?, ?, ?, ?)', [

            'Blog Post',
            '<p>Text of the article laskdklllsdfkksdjjjskmnkksdogjk sadfjdfgodfg kojsdkfgjrgjf fghdjjdfjfgh</p>',
            'pic1.jpg',
            'Picture1'

        ]);

        // 2 sposob predysmatrivaet isspolzovanie konstructora zaprosov

        DB::table('articles')->insert([

            [
                'name'=>'Sample blog post 1',
                'text'=>'<p>Taskdjjojsndiofjisssssssssdfjksodkfjskldfjlllllllllllllllllllslmldkspdrjfnkjsd</p>',
                'img'=>'pic2.jpg',
                'Picture'=>'Picture2'
            ],

            [
                'name'=>'Sample blog post 2',
                'text'=>'<p>jskdjkjnsjdfnsdfsdfrgjhdfhskdbfkjbksndifsjstasmkwdngksndkfnaskodjdjkhnmlsdjkfonasljk</p>',
                'img'=>'pic3.jpg',
                'Picture'=>'Picture3'
            ]

        ]);

        // 3 sposob - isspolzovanie modeley
        Article::create([

            'name'=>'Sample post 3',
            'text'=>'Hello world',
            'img'=>'pic4.jpg',
            'Picture'=>'Picture4'

        ]);
    }
}
