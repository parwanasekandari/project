
  @extends('dari_masterpage')
  <link href="/lms/build/css/custom.css" rel="stylesheet">
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

             <div class="col-md-5"></div>
             <div class="col-md-6 ">
             <h2 class="text-left astyle" >جزییات اعضا</h2>
             </div>
             <div class="col-md-1"><a href="javascript:history.back(1)"  class="fa fa-forward back" ></a></div>
            </div>

         </div>
      <div class="panel-body"  >
<!--  -->
<div class="col-md-1 "></div>
<div class="col-md-10 col-sm-4 col-xs-12 profile_details">
  <div class="well profile_view">
    <div class="col-sm-12">
      <div class="left col-xs-7">
        <h2 class="brief" style="font-family:Times; "><i><b>{{$member->name}} {{$member->l_name}}</b></i></h2>
          <br>
        <p><strong>Name: </strong> {{$member->name}} </p>
        <p><strong>Last Name: </strong> {{$member->l_name}} </p>
        <p><strong>Member ID: </strong> {{$member->member_id}} </p>
        <p><strong>Email : </strong> {{$member->email}} </p>
        <p><strong>Phone : </strong> {{$member->phone_no}} </p>
        <p><strong>Department : </strong> {{$member->department}} </p>

      </div>
      <div class="right col-xs-4 text-right">
        <img src="/lms/{{$member->photo}}" alt="" class="img-circle img-responsive" >
      </div>
    </div>
    <div class="col-xs-12 bottom text-center">
      <div class="col-xs-12 col-sm-6 emphasis">
        <p class="ratings">
          <a>4.0</a>
          <a href="#"><span class="fa fa-star star"></span></a>
          <a href="#"><span class="fa fa-star star"></span></a>
          <a href="#"><span class="fa fa-star star"></span></a>
          <a href="#"><span class="fa fa-star star"></span></a>
          <a href="#"><span class="fa fa-star-o star"></span></a>
        </p>
      </div>
      <div class="col-xs-12 col-sm-6 emphasis">
        <a href="/member_edit/{{$member->id}}" style="color:white;">  <button type="button" class="btn areset btn-xs">
         Edite &nbsp &nbsp<i class="glyphicon glyphicon-edit "></i>  </a></button>
        <a class="delete"  href="/member_delete/{{$member->id}}" style="color:white;"><button type="button" class="btn abtn btn-xs "> Delete &nbsp
          <i class="glyphicon glyphicon-trash"> </i> </a>
        </button>
      </div>
    </div>
  </div>
</div>


<!--  -->


      </div>
</div>
</div>
</div>



    <script src="/lms/build/js/custom.min.js"></script>

@stop
