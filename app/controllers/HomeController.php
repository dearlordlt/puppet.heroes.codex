<?php

class HomeController extends BaseController {

	public function home() {

		/*Mail::send('emails.auth.test', array('name' => 'World Of Ahm'), function($message) {
			$message->to('sarunas79@gmail.com', 'Šarūnas Šliteris')->subject('Bandom');
		});*/

		return View::make('home');
	}

}
