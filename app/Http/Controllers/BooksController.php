<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\bookRequest;
use App\Http\Controllers\Controller;
use App\book;
use Validator, Input, Redirect; 
use Response;


class BooksController extends Controller
{
    // Hey We Go

  protected $book = null;

  public function __construct(book $book)
  {
    $this->books = $book;
  }

    public function index($type = null)
    {
      if(is_null($type)){ $type = 'title'; }

        $books =  $this->books->allBooks($type);

        return view('books.allbooks', ['books' => $books]);
    }

    public function show(Book $book)
    {

        return view('books.getbook', ['book' => $book]);
    }

    // edit
    public function edit(book $book){
      
      return view('books.updatebook', ['book' => $book]);
    }

    public function update(book $book, bookRequest $request)
    {

      $book->update($request->all());
      if($request->image){
        $name = $request->file('image')->getClientOriginalExtension();
        $name = $book->id.'.'.$name;
        $request->file('image')->move('images', $name);
        $book->update(['image' => 'images/'.$name]);
      }
      
      return redirect('book');
      
    }

    //create
    public function create()
    {

      return view('books.savebook');
    }

    public function store(bookRequest $request)
    {
    
      $book = Book::create($request->all());

      if($request->image){
        $name = $request->file('image')->getClientOriginalExtension();
        $name = $book->id.'.'.$name;
        $request->file('image')->move('images', $name);
        $book->update(['image' => 'images/'.$name]);
      }

      return redirect('book');
      }

    // delete
    public function destroy(book $book)
    {

      $book->delete();

      return redirect('book');
    }
    
    public function search(book $books)
    {
      if(!is_null($books)){
        echo $this->books;
      }
      //$books =  $this->books->allBooks();

      return $books;
    }

}