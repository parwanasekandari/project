@extends('masterpage')
@section('search')
<form action="\book_search" method="get" class="sidebar-form">
  <div class="input-group">
    <input type="text" name="s" class="form-control" placeholder="Search...">
    <span class="input-group-btn">
      <button type="submit" name="search1" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
    </span>
  </div>
</form>
@endsection
@section('content')
<div class="row">

<div class="col-lg-1 col-md-1"></div>

<div class="row">
 <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">


     <div class="panel panel-default">

       <div class="panel-heading apanel">
      <div class="row">
     <div class="col-md-5"><a href="javascript:history.back(1)"  class="fa fa-backward back" ></a></div>
     <div class="col-md-7 ">
       <h2 class="text-left astyle" >Update Magazine</h2>
     </div>
     </div>

       </div>

       <div class="panel-body">

         <form  action="/mg_update/{{$magazine->id}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
          {{method_field('patch')}}
            <input type="hidden" name="_token" value="{{csrf_token()}}">

           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1" style="text-align:left;" for="first-name">Magazine ISBN<span class="required">*</span>
             </label>
             <div class="col-md-7 col-sm-7 col-xs-12">
               <input type="text"   required="required" class="form-control col-md-7 col-xs-12" name="isbn" value="{{$magazine->magazine_id}}">
             </div>
           </div>
           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1" style="text-align:left;" for="first-name">Magazine Name<span class="required">*</span>
             </label>
             <div class="col-md-7 col-sm-7 col-xs-12">
               <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="name" value="{{$magazine->magazine_name}}">
             </div>
           </div>

           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1" style="text-align:left;" for="first-name">Languages<span class="required">*</span>
             </label>
             <div class="col-md-7 col-sm-7 col-xs-12">
                 <select class="form-control col-md-7 col-xs-12 " dir="ltr" name="language">
                      <option> Choose Language</option>
                 <option value="English">English</option>
                 <option value="Dari">دری</option>
                 <option value="Pashto">پشتو</option>
                 <option value="Arabi">عربی</option>
               </select>
             </div>
           </div>
           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1" style="text-align:left;" for="first-name">Author<span class="required">*</span>
             </label>
             <div class="col-md-7 col-sm-7 col-xs-12">
               <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="author" value="{{$magazine->author}}">
             </div>
           </div>

               <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1" style="text-align:left;" for="first-name">Edition <span class="required">*</span>
             </label>
             <div class="col-md-7 col-sm-7 col-xs-12">
               <input type="text"   required="required" class="form-control col-md-7 col-xs-12" name="edition" value="{{$magazine->edition}}">
             </div>
           </div>
               <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1" style="text-align:left;" for="first-name">Volume <span class="required">*</span>
             </label>
             <div class="col-md-7 col-sm-7 col-xs-12">
               <input type="text"   required="required" class="form-control col-md-7 col-xs-12" name="volume" value="{{$magazine->volume}}">
             </div>
           </div>
               <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1" style="text-align:left;" for="first-name">Remain <span class="required">*</span>
             </label>
             <div class="col-md-7 col-sm-7 col-xs-12">
               <input type="text"   required="required" class="form-control col-md-7 col-xs-12" name="remain" value="{{$magazine->remain}}">
             </div>
           </div>
           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1" style="text-align:left;" for="first-name">Shelf NO<span class="required">*</span>
             </label>
             <div class="col-md-7 col-sm-7 col-xs-12">

               <select class="form-control col-md-7 " dir="ltr" name="shelf_no">
                     <option>Choose Shelf<option>
                 <option value="اA">A</option>
                 <option value="B">B</option>
                 <option value="C">C</option>
                 <option value="D">D</option>
                 <option value="E">E</option>
                 <option value="F">F</option>
                 <option value="G">G</option>
                 <option value="H">H</option>
                 <option value="I">I</option>
                 <option value="J">J</option>
                 <option value="K">K</option>
                 <option value="L">L</option>
                 <option value="M">M</option>
                 <option value="N">N</option>
                 <option value="O">O</option>
                 <option value="P">P</option>
                 <option value="Q">Q</option>
                 <option value="R">R</option>
                 <option value="S">S</option>
                 <option value="T">T</option>
                 <option value="U">U</option>
                 <option value="V">V</option>
                 <option value="W">W</option>
                 <option value="X">X</option>
                 <option value="Y">Y</option>
                 <option value="Z">Z</option>
                 <option value="Sh">Sh</option>
                 <option value="Ch">Ch</option>
                 <option value="Kh">Kh</option>
                 <option value="Zh">Zh</option>
                 <option value="Gh">Gh</option>

               </select>

             </div>
           </div>

           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1" style="text-align:left;" for="first-name">Description <span class="required">*</span>
             </label>
             <div class="col-md-7 col-sm-7 col-xs-12">
               <textarea name="description" placeholder="write Description" rows="8" cols="48"  > {{$magazine->desctiption}} </textarea>
             </div>
           </div>


                               <div class="ln_solid"></div>
                               <div class="form-group">
                                 <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                                   <button type="reset" class="btn areset">Reset</button>
                                   <input type="submit" class="btn abtn" name="submit" value="Update">
                                 </div>
                               </div>

                 </form>



       </div>

     </div>


</div>
  </div>
 </div>





@stop
