<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Magazine;
use App\Book;
use App\Borrow_magazine;

class magazineController extends Controller
{
  function show(){

    $search=\Request::get('search');
    if(isset($search)){
    $magazine=\DB::table('magazines')
    ->where('magazine_name', 'LIKE', "%$search%")->orwhere('languages', 'LIKE', "%$search%")
  ->orwhere('magazine_id', 'LIKE', "%$search%")->orwhere('author', 'LIKE', "%$search%")->orwhere('edition', 'LIKE', "%$search%")
    ->paginate(10);
    return view('pages.magazine_show',['magazine'=>$magazine]);
  }
  else{
      $magazine=\DB::table('magazines')->paginate(10);
        return view('pages.magazine_show',['magazine'=>$magazine]);
  }
  }



  function insert(Request $request){
      $magazine=new Magazine;
      $magazine->magazine_id=$request->isbn;
      $magazine->magazine_name=$request->name;
      $magazine->category=$request->category;
      $magazine->languages=$request->language;
      $magazine->author=$request->author;
      $magazine->edition=$request->edition;
      $magazine->volume=$request->volume;
      $magazine->remain=$request->remain;
      $magazine->shelf_no=$request->shelf_no;
      $magazine->desctiption=$request->description;
      $magazine->save();
        return redirect('magazine');

    }

    function delete($id){
    $delete=Magazine::find($id);
    $delete->delete();
    return back();
}

function edit($id){
$magazine=Magazine::find($id);
return view('pages.magazine_edit',['magazine'=>$magazine]);

}

function update(Request $request,$id){
  $magazine=Magazine::find($id);
  $magazine->magazine_id=$request->isbn;
  $magazine->magazine_name=$request->name;
  $magazine->languages=$request->language;
  $magazine->author=$request->author;
  $magazine->edition=$request->edition;
  $magazine->volume=$request->volume;
  $magazine->remain=$request->remain;
  $magazine->shelf_no=$request->shelf_no;
  $magazine->desctiption=$request->description;
  $magazine->save();
  return redirect('magazine');

}

// function for borrow Magazine

  function select(){

      $magazine = \DB::table('borrow_magazines')
           ->join('magazines', 'borrow_magazines.magazinee_id', '=', 'magazines.magazine_id')
           ->join('members', 'borrow_magazines.member_id', '=', 'members.member_id')
           ->select('borrow_magazines.*', 'magazines.magazine_name', 'magazines.magazine_id','members.member_id','members.name')
           ->paginate(10);
        return view('pages.magazine_borrow',['magazine'=>$magazine]);

  }
      function insert_borrow(Request $request){

        $magazine=new Borrow_magazine;
        $magazine->member_id=$request->mid;
        $magazine->magazinee_id=$request->mgid;
        $magazine->return_date=$request->r_date;
        $magazine->date_borrow=$request->t_date;
        $magazine->save();
        return redirect('borrow_magazine');


      }

      // route for update


        function edit1($id){
        $magazine=Borrow_magazine::find($id);
        return view('pages.magazine_borrow_edit',['magazine'=>$magazine]);
        }

        function update1(Request $request,$id){
        $magazine=Borrow_magazine::find($id);
        $magazine->member_id=$request->mid;
        $magazine->magazinee_id=$request->mgid;
        $magazine->return_date=$request->r_date;
        $magazine->date_borrow=$request->t_date;
        $magazine->save();
        return redirect('borrow_magazine');
        }

        function delete1($id){
            $delete=Borrow_magazine::find($id);
            $delete->delete();
            return back();
        }


        // Dari magazine routes

        function dari_show(){

          $search=\Request::get('search');
          if(isset($search)){
          $magazine=\DB::table('magazines')
          ->where('magazine_name', 'LIKE', "%$search%")->orwhere('languages', 'LIKE', "%$search%")
        ->orwhere('magazine_id', 'LIKE', "%$search%")->orwhere('author', 'LIKE', "%$search%")->orwhere('edition', 'LIKE', "%$search%")
          ->paginate(10);
          return view('pages.magazine_dari_show',['magazine'=>$magazine]);
        }
        else{
            $magazine=\DB::table('magazines')->paginate(10);
              return view('pages.magazine_dari_show',['magazine'=>$magazine]);
        }
        }

        // Dari magazine insert

        function dari_insert(Request $request){
            $magazine=new Magazine;
            $magazine->magazine_id=$request->isbn;
            $magazine->magazine_name=$request->name;
            $magazine->languages=$request->language;
            $magazine->author=$request->author;
            $magazine->edition=$request->edition;
            $magazine->volume=$request->volume;
            $magazine->remain=$request->remain;
            $magazine->desctiption=$request->description;
            $magazine->save();
              return redirect('dari_magazine');

          }

          // dari edite function

          function dari_edit($id){
          $magazine=Magazine::find($id);
          return view('pages.magazine_dari_edit',['magazine'=>$magazine]);

          }

          function dari_update(Request $request,$id){
            $magazine=Magazine::find($id);
            $magazine->magazine_id=$request->isbn;
            $magazine->magazine_name=$request->name;
            $magazine->languages=$request->language;
            $magazine->author=$request->author;
            $magazine->edition=$request->edition;
            $magazine->volume=$request->volume;
            $magazine->remain=$request->remain;
            $magazine->desctiption=$request->description;
            $magazine->save();
            return redirect('dari_magazine');

          }

          // function for dari_borrow Magazine

            function dari_select(){

                $magazine = \DB::table('borrow_magazines')
                     ->join('magazines', 'borrow_magazines.magazinee_id', '=', 'magazines.magazine_id')
                     ->join('members', 'borrow_magazines.member_id', '=', 'members.member_id')
                     ->select('borrow_magazines.*', 'magazines.magazine_name', 'magazines.magazine_id','members.member_id','members.name')
                     ->paginate(10);
                  return view('pages.magazine_dari_borrow',['magazine'=>$magazine]);

            }

            // dari insert borrow
            function dari_insert_borrow(Request $request){

              $magazine=new Borrow_magazine;
              $magazine->member_id=$request->mid;
              $magazine->magazinee_id=$request->mgid;
              $magazine->return_date=$request->r_date;
              $magazine->date_borrow=$request->t_date;
              $magazine->save();
              return redirect('dari_borrow_magazine');


            }

            // Dari route for barrow update


              function dari_edit1($id){
              $magazine=Borrow_magazine::find($id);
              return view('pages.magazine_dari_borrow_edit',['magazine'=>$magazine]);
              }

              function dari_update1(Request $request,$id){
              $magazine=Borrow_magazine::find($id);
              $magazine->member_id=$request->mid;
              $magazine->magazinee_id=$request->mgid;
              $magazine->return_date=$request->r_date;
              $magazine->date_borrow=$request->t_date;
              $magazine->save();
              return redirect('dari_borrow_magazine');
              }




}
