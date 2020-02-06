<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\Session;


class ContactController extends Controller
{
    protected $request;

  /*  public function __construct(Request $request) {

        $this->request = $request;

    }*/

    public function store(Request $request, $id = false) {

        if($request->isMethod('post')) {

            $messages = [

                'name.required' => 'Поле :attribute надо заполнить, другалечек!',
                'email.required' => 'Другалек, имале надо написать, другалечек!'

            ];

            $validator = Validator::make($request->all(), [

                'name' => 'required',
                'email' => 'required',

            ], $messages);

            $validator->after(function ($validator) {

                $validator->errors()->add('name', 'другалек ты мой');

            });

            if($validator->fails()) {


                /*if($messages->has('name')) {

                    dump($messages->first('name', '<p> :message </p>'));

                }*/



                return redirect()->route('contactGet.show')->withErrors($validator)->withInput();

            }





        }

        return view('Test.contact', [

            'title'=>'Contacts']);

    }

    public function show(Request $request) {

//        $result = $request->session()->get('key', 'default');
//        $result = $request->session()->all();
//        $result = $request->session()->put('key.first', 'value');
        $request->session()->put('key.first', 'value');

//        $result = $request->session()->all();

//        if($request->session()->has('key.second')) {
        $request->session()->push('key.second', 'value2');
//        $result = $request->session()->all();
//            dump($result);
//        }

//        dump(session('key'));
//        session(['key2'=>'value666']);

//        $title_head = Lang::get('messages.HelloFriend', ['name' => 'Lox']);

        if(Lang::has('messages.apples')) {

            $title_head = Lang::choice('messages.apples', 89);


        }
        return view('Test.contact', [

            'title'=>'Contacts',
            'title_head' => $title_head,

        ]);

    }
}
