<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Type;

class TestController extends Controller
{
    public function index()
    {
        define("STAS", "SADILSIYA");
        $stas = 'gey';
        $new = $stas == 'gey' ? 'pidor' : 'kross';
        if ($stas == 'gey') {
            $test = 'Hello';
            return view('test', [
                'test' => $test,
                'test2' => "World",
                'test3' => "!",
                'a' => "A",
                'b' => "Stas",
                'c' => "Orlic",
                'd' => '!',
                'e' => " ",
            ]);
        }
    }

    public function indexNew()
    {
        return view('new', [

        ]);
    }
    public function indexNewNew(Request $request)
    {
        $name = 'default';
        if (isset($_POST['name'])){
            $name = $_POST['name'];
        }
        return view('new', [
            'name' => $name
        ]);
    }
    public function indexNew1()
    {
        return view('test1', [

        ]);
    }
}

//-----HT for loop------
//$year = 1900;
/*$echo = '';
$echo .= '<select>';
for($year = 1900; $year <= 2020; $year++) {
    $echo .= "<option value='".$year."'>".$year."</option>";
}
$echo .= '</select>';
echo $echo;

//$i = 1;
echo "<table border=\"1\">\n";
for($i = 1; $i <= 9; $i++){
    echo "<tr>";
//    $j = 1;
    for($j = 1; $j <= 9; $j++){
        echo "<td><b> $i * $j = " . $i * $j. "</b></td>";
    }
    echo "</tr>";
}*/


//-----------foreach loop----------------

/*$arr = array('Leha', 'Serega', 'Valera');

$arr[5] = 'Chlen';
$arr[] = 'Snapak';
$arr[] = 'Sambist';

$names = [
    'Borov' => 'MC',
    'Valera' => 'JMA',
    'Penis' => 'Detrov',
];*/

/*echo '<pre>';
print_r($names);
echo '</pre>';*/

/*foreach($names as $name){
    echo $name . '<br>';
}*/
/*
foreach($names as $key => $name){
    echo "Name: $key, Lastname: $name <br>";
}


foreach($arr as $k => $v){
    echo "Flat: $k, Name: $v <br>";
}*/

/*for($i = 1; $i <= 30; $i ++){
    echo $i . '<br>';
    if($i == 5){
        echo 'Yeah, this is FIVE - ' . $i;
        break;
    }else{
        continue;
    }
}*/






