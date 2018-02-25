<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\monograph;

class monographController extends Controller
{
  function show(){
// search And Select
$search=\Request::get('search');
if(isset($search)){
$monograph=\DB::table('monographs')
->where('monograph_owner', 'LIKE', "%$search%")->orwhere('mongraph_name', 'LIKE', "%$search%")
->orwhere('department', 'LIKE', "%$search%")->orwhere('supervisor', 'LIKE', "%$search%")
->orwhere('m_year', 'LIKE', "%$search%")->paginate(10);
return view('pages.monograph',['monograph'=>$monograph]);
}
else{
    $monograph=\DB::table('monographs')->paginate(10);
         return view('pages.monograph',['monograph'=>$monograph]);
}
  }

// Delete function for Monograph

  function delete($id){
  $delete=Monograph::find($id);
  $delete->delete();
  return back();
}

// insert function for momograph
function insert(Request $request){

  $monograph=new Monograph;
  $monograph->monograph_owner=$request->author;
  $monograph->mongraph_name=$request->name;
  $monograph->department=$request->department;
  $monograph->supervisor=$request->supervisor;
  $monograph->m_year=$request->year;
  $monograph->description=$request->desctription;
  $monograph->save();
  return redirect('monograph');


}

// Edite function for Monograph

function edit($id){
$monograph=Monograph::find($id);
return view('pages.monograph_edit',['monograph'=>$monograph]);

}

function update(Request $request,$id){

$monograph=Monograph::find($id);
$monograph->monograph_owner=$request->author;
$monograph->mongraph_name=$request->name;
$monograph->department=$request->department;
$monograph->supervisor=$request->supervisor;
$monograph->m_year=$request->year;
$monograph->description=$request->desctription;
$monograph->save();
return redirect('monograph');



}

//  Dari Monograph function_exists

function dari_show(){
$search=\Request::get('search');
if(isset($search)){
$monograph=\DB::table('monographs')
->where('monograph_owner', 'LIKE', "%$search%")->orwhere('mongraph_name', 'LIKE', "%$search%")
->orwhere('department', 'LIKE', "%$search%")->orwhere('supervisor', 'LIKE', "%$search%")
->orwhere('m_year', 'LIKE', "%$search%")->paginate(10);
return view('pages.monograph_dari',['monograph'=>$monograph]);
}
else{
  $monograph=\DB::table('monographs')->paginate(10);
       return view('pages.monograph_dari',['monograph'=>$monograph]);
}
}

// Dari Edite function for monograph

function dari_edit($id){
$monograph=Monograph::find($id);
return view('pages.monograph_dari_edit',['monograph'=>$monograph]);

}

function dari_update(Request $request,$id){

$monograph=Monograph::find($id);
$monograph->monograph_owner=$request->author;
$monograph->mongraph_name=$request->name;
$monograph->department=$request->department;
$monograph->supervisor=$request->supervisor;
$monograph->m_year=$request->year;
$monograph->description=$request->desctription;
$monograph->save();
return redirect('dari_monograph');



}

// Dari insert function for momograph
function dari_insert(Request $request){

  $monograph=new Monograph;
  $monograph->monograph_owner=$request->author;
  $monograph->mongraph_name=$request->name;
  $monograph->department=$request->department;
  $monograph->supervisor=$request->supervisor;
  $monograph->m_year=$request->year;
  $monograph->description=$request->desctription;
  $monograph->save();
  return redirect('dari_monograph');


}



}
