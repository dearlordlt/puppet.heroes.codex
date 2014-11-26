<?php

class BooksController extends BaseController {

	public function books() {
        return View::make('books.books')
            ->with('books', Book::all());
    }
	//End Class
}
