<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\D_post;

class table_post extends Controller
{
  function show(){
  $post=Post::all();
  return view("index",['post'=>$post]);
}
//update
function edit($id){
$post=Post::find($id);
return view('pages.post_edit',['post'=>$post]);

}

function update(Request $request,$id){

$post=Post::find($id);
$post->title=$request->title;
$post->post=$request->post;
$post->save();
return redirect('Admin');



}

//end update

//  Dari routes

function d_show(){
$d_post=D_post::all();
return view("dari_index",['d_post'=>$d_post]);
}

//update
function d_edit($id){
$d_post=D_post::find($id);
return view('pages.dari_post_edit',['d_post'=>$d_post]);

}

function d_update(Request $request,$id){

$d_post=D_post::find($id);
$d_post->title=$request->title;
$d_post->post=$request->post;
$d_post->save();
return redirect('D_Admin');



}


}
