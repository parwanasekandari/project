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

<!--  -->
<div class="row">

<div class="col-lg-1 col-md-1"></div>
<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
  <div class="panel ">
    <div class="panel-heading apanel">
      <div class="row">
       <div class="col-md-5"><a href="javascript:history.back(1)"  class="fa fa-backward back" ></a></div>
       <div class="col-md-7 ">
       <h2 class="text-left astyle" >Post Edit</h2>
       </div>
      </div>
    </div>
    <div class="panel-body" >

 <form  action="/p_update/{{$post->id}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
  {{method_field('patch')}}
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <textarea name="title" rows="2" cols="60" class="text-center" >{{$post->title}}</textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <textarea name="post" rows="14" cols="60" class="text-justify"  >{{$post->post}}</textarea>
    </div>
  </div>
  <div class="ln_solid"></div>
  <div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
      <button type="reset" class="btn areset">Reset</button>
      <input type="submit" class="btn abtn" name="submit" value="update">
    </div>
  </div>



</form>
    </div>
  </div>
</div>
<!-- end of row div -->
</div>
@stop
