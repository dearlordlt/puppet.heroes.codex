<?php

class BooksController extends BaseController {

	public function books() {
        return View::make('books.books')
            ->with('books', Book::all());
    }

    public function getAddBook() {
        return View::make('books.addbook');
    }

    public function postAddBook() {
        print "YOYO";
    }

	//End Class
}
