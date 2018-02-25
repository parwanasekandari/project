<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;

class bookController extends Controller
{
    function show(){
  $search=\Request::get('search');
  if(isset($search)){
  $book=\DB::table('books')
  ->where('isbn', 'LIKE', "%$search%")->orwhere('category', 'LIKE', '%$q%')->
  orwhere('title', 'LIKE', "%$search%")->orwhere('author', 'LIKE', "%$search%")->orwhere('reg_date', 'LIKE', "%$search%")
  ->orwhere('shelf_no', 'LIKE', "%$search%")
  ->paginate(10);
  return view('pages.book_show',['book'=>$book]);
}
else{
  $book=\DB::table('books')->paginate(10);
    return view('pages.book_show',['book'=>$book]);
}



    }
    function delete($id){
    $book=Book::find($id);
    $book->delete();
    return back();
}
function insert(Request $request){
    $book=new Book;
    $book->isbn=$request->isbn;
    $book->title=$request->title;
    $book->volume=$request->volume;
    $book->remain_book=$request->remain;
    $book->category=$request->category;
    $book->author=$request->author;
    $book->publisher=$request->publisher;
    $book->edition=$request->edition;
    $book->pages=$request->pages;
    $book->reg_date=$request->date;
    $book->shelf_no=$request->shelf_no;

    $book->save();
    return redirect('book');
  }

  function edit($id){
    $book=Book::find($id);
  return view('pages.book_edit',['book'=>$book]);

  }

  function update(Request $request,$id){

  $book=Book::find($id);

  $book->isbn=$request->isbn;
  $book->title=$request->title;
  $book->volume=$request->volume;
  $book->remain_book=$request->remain;
  $book->category=$request->category;
  $book->author=$request->author;
  $book->publisher=$request->publisher;
  $book->edition=$request->edition;
  $book->pages=$request->pages;
  $book->reg_date=$request->date;
  $book->shelf_no=$request->shelf_no;

  $book->save();
  return redirect('book');


  }

// Dari for book page

function dari_show(){
  $search=\Request::get('search');
  if(isset($search)){
  $book=\DB::table('books')
  ->where('isbn', 'LIKE', "%$search%")->orwhere('category', 'LIKE', '%$q%')->
  orwhere('title', 'LIKE', "%$search%")->orwhere('author', 'LIKE', "%$search%")->orwhere('reg_date', 'LIKE', "%$search%")
  ->orwhere('shelf_no', 'LIKE', "%$search%")
  ->paginate(10);
  return view('pages.book_dari_show',['book'=>$book]);
}
else{
  $book=\DB::table('books')->paginate(12);
    return view('pages.book_dari_show',['book'=>$book]);
}


}

//  Dari book edit1

function dari_edit($id){
  $book=Book::find($id);
return view('pages.book_dari_edit',['book'=>$book]);

}

function dari_update(Request $request,$id){

$book=Book::find($id);

$book->isbn=$request->isbn;
$book->title=$request->title;
$book->volume=$request->volume;
$book->remain_book=$request->remain;
$book->category=$request->category;
$book->author=$request->author;
$book->publisher=$request->publisher;
$book->edition=$request->edition;
$book->pages=$request->pages;
$book->reg_date=$request->date;
$book->shelf_no=$request->shelf_no;

$book->save();
return redirect('dari_book');


}

//  insert dari book page
function dari_insert(Request $request){
    $book=new Book;
    $book->isbn=$request->isbn;
    $book->title=$request->title;
    $book->volume=$request->volume;
    $book->remain_book=$request->remain;
    $book->category=$request->category;
    $book->author=$request->author;
    $book->publisher=$request->publisher;
    $book->edition=$request->edition;
    $book->pages=$request->pages;
    $book->reg_date=$request->date;
    $book->shelf_no=$request->shelf_no;

    $book->save();
    return redirect('dari_book');
  }

}
