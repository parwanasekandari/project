<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Borrow_book;

class borrowController extends Controller
{
    function show(){
      $borrow = \DB::table('borrow_books')
            ->join('books', 'borrow_books.book_id', '=', 'books.isbn')
            ->join('members', 'borrow_books.member_id', '=', 'members.member_id')
            ->select('borrow_books.*', 'books.title', 'books.volume','books.isbn','members.name')
            ->paginate(10);
      return view('pages.borrow',['borrow'=>$borrow]);
    }
    function delete($id){
    $borrow=Borrow_book::find($id);
    $borrow->delete();
      return back();
}


    function insert(Request $request){

      $borrow=new Borrow_book;
      $borrow->member_id=$request->mid;
      $borrow->book_id=$request->bid;
      $borrow->return_date=$request->r_date;
      $borrow->date_borrow=$request->t_date;
      $borrow->save();
      return redirect('borrow');


    }

// route for update


  function edit($id){
  $borrow=Borrow_book::find($id);
  return view('pages.borrow_edit',['borrow'=>$borrow]);

  }

  function update(Request $request,$id){

  $borrow=Borrow_book::find($id);

  $borrow->member_id=$request->mid;
  $borrow->book_id=$request->bid;
  $borrow->return_date=$request->r_date;
  $borrow->date_borrow=$request->t_date;
  $borrow->save();
  return redirect('borrow');


  }

  // Dari book  Barrow function_exists
  function dari_show(){
    $borrow = \DB::table('borrow_books')
          ->join('books', 'borrow_books.book_id', '=', 'books.isbn')
          ->join('members', 'borrow_books.member_id', '=', 'members.member_id')
          ->select('borrow_books.*', 'books.title', 'books.volume','books.isbn','members.name')
          ->paginate(10);
    return view('pages.dari_book_borrow',['borrow'=>$borrow]);
  }

  // insert function
  function dari_insert(Request $request){

    $borrow=new Borrow_book;
    $borrow->member_id=$request->mid;
    $borrow->book_id=$request->bid;
    $borrow->return_date=$request->r_date;
    $borrow->date_borrow=$request->t_date;
    $borrow->save();
    return redirect('dari_barrow');


  }

  // route for update


    function dari_edit($id){
    $borrow=Borrow_book::find($id);
    return view('pages.book_borrow_edit',['borrow'=>$borrow]);

    }

    function dari_update(Request $request,$id){

    $borrow=Borrow_book::find($id);

    $borrow->member_id=$request->mid;
    $borrow->book_id=$request->bid;
    $borrow->return_date=$request->r_date;
    $borrow->date_borrow=$request->t_date;
    $borrow->save();
    return redirect('dari_barrow');


    }


}
