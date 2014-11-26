<?php

class BooksController extends BaseController {

	public function books() {
        return View::make('books.books');
    }
	//End Class
}
