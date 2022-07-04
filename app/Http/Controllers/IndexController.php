<?php

	namespace App\Http\Controllers;
 
	use App\Http\Controllers\Controller;

	use Illuminate\Http\Request;

	use Illuminate\Support\Facades\Redirect;

	
	class IndexController extends Controller{

		public function indexAction()
		{
			// метод главной страницы 

			$data = " Я Олег и я передаю данные в вид, а тпм что будет";

			$text = "А это гениальный код"; 

			$flag = true;

			$users = ['Андрей', 'Влад', 'Павел'];

			//return view('pages.welcome', ['data' => $data, 'content' => $text]);

			return view('pages.welcome', compact('data', 'text' , 'flag', 'users'));
		}

		public function contactsAction(Request $request){

			$status = false;

			if(isset($request->status))
				$status = true;

			return view('pages.contacts', compact('status'));
		}

		public function obrAction(Request $request){

			$status = 1;

			return Redirect::route('contacts', compact('status'));

		}

	}