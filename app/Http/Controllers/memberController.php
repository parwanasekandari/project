<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Member;

class memberController extends Controller
{
    function show(){

        $search=\Request::get('search');
        if(isset($search)){
        $member=\ DB::table('members')
        ->where('member_id', 'LIKE', "%$search%")->orwhere('name', 'LIKE', "%$search%")
      ->orwhere('l_name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->orwhere('phone_no', 'LIKE', "%$search%")
      ->orwhere('department', 'LIKE', "%$search%")  ->paginate(6);
        return view('pages.member',['member'=>$member]);
      }
      else{
            $member=\ DB::table('members')->paginate(100);
              return view('pages.member',['member'=>$member]);
      }


    }

  function detail($id){
    $member=Member::find($id);
  return view('pages.member_detail',['member'=>$member]);
  }
  function delete($id){
  $member=Member::find($id);
  $member->delete();
    return redirect('member');
}

function edit($id){
  $member=Member::find($id);
return view('pages.member_edit',['member'=>$member]);
}

  function update(Request $request,$id){

  $member=Member::find($id);
  $member->member_id=$request->m_id;
  $member->name=$request->name;
  $member->l_name=$request->lname;
  $member->email=$request->email;
  $member->phone_no=$request->phone;
  $member->department=$request->department;
  $member->photo=$request->file('image')->store('images');

  $member->save();
  return redirect('member');


}

    function insert(Request $request){

      $member=new Member;
      $member->member_id=$request->m_id;
      $member->name=$request->name;
      $member->l_name=$request->lname;
      $member->email=$request->email;
      $member->phone_no=$request->phone;
      $member->department=$request->department;
      $member->photo=$request->file('image')->store('images');
      $member->save();
      return redirect('member');


    }

    // Dari Member function_exists

    function dari_show(){

        $search=\Request::get('search');
        if(isset($search)){
        $member=\ DB::table('members')
        ->where('member_id', 'LIKE', "%$search%")->orwhere('name', 'LIKE', "%$search%")
      ->orwhere('l_name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->orwhere('phone_no', 'LIKE', "%$search%")
      ->orwhere('department', 'LIKE', "%$search%")  ->paginate(6);
        return view('pages.member_dari',['member'=>$member]);
      }
      else{
            $member=\ DB::table('members')->paginate(100);
              return view('pages.member_dari',['member'=>$member]);
      }


    }

    // Dari Add New Member

    function dari_insert(Request $request){

      $member=new Member;
      $member->member_id=$request->m_id;
      $member->name=$request->name;
      $member->l_name=$request->lname;
      $member->email=$request->email;
      $member->phone_no=$request->phone;
      $member->department=$request->department;
      $member->photo=$request->file('image')->store('images');
      $member->save();
      return redirect('Dari_member');


    }

    // dari detail member function

    function dari_detail($id){
      $member=Member::find($id);
    return view('pages.member_detail',['member'=>$member]);
    }


}
