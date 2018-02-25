@extends('dari_masterpage')
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

<!--  -->
<div class="row">

<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
  <div class="panel ">
    <div class="panel-heading apanel">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-7 ">
        <h2 class="text-left astyle" >ویرایش پست</h2>
        </div>
        <div class="col-md-1"><a href="javascript:history.back(1)"  class="fa fa-forward back" ></a></div>
       </div>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

          <form  action="/dari_update/{{$d_post->id}}" method="post" class="form-inline" role="form">
           {{method_field('patch')}}
           <input type="hidden" name="_token" value="{{csrf_token()}}">

             <div class="form-group">
             <div class="col-sm-11">
               <textarea name="title" rows="2" cols="60" class="text-center" >{{$d_post->title}}</textarea>
             </div>
             <label class="control-label col-sm-1" for="email">عنوان</label>
             </div>

           <div class="form-group">
             <div class="col-sm-11 ">
               <textarea name="post" rows="17" cols="60" class="text-justify"  >{{$d_post->post}}</textarea>
               </div>
               <label class="control-label col-sm-1" for="pwd">جزییات</label>
             </div>


              <div class="col-md-7 ">  </div>

              <div class="col-md-4 " >

                 <input type="submit" class="btn abtn" name="submit" value="ویرایش">
                 <button type="reset" class="btn areset">پاک کردن</button>
              </div>



          </form>




        </div>
        <div class="col-md-2"></div>



      </div>



    </div>
  </div>
</div>
<!-- end of row div -->
</div>
@stop
