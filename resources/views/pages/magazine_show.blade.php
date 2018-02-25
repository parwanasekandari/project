@extends('masterpage')
@section('search')
<form action="magazine" method="get" class="sidebar-form">
  <div class="input-group">
    <input type="text" name="search" class="form-control" placeholder="Search...">
    <span class="input-group-btn">
      <button type="submit" name="search1" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
    </span>
  </div>
</form>
@endsection
@section('content')
<div class="row">

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel ">
      <div class="panel-heading apanel">
        <div class="row">
       <div class="col-md-5"><a href="javascript:history.back(1)"  class="fa fa-backward back" ></a></div>
       <div class="col-md-7 ">
         <h2 class="text-left astyle" >Magazine List</h2>
       </div>
       </div>
      </div>
      <div class="panel-body"  >
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-condensed table-hover">
            <tr class="atable">

                <th > NO </th>
                <th > Magazine ID  </th>
                <th > Magazine Name  </th>
                <th> Category</th>
                <th > Languages </th>
                <th > Author </th>
                <th > Edition </th>
                <th > Volume</th>
                <th > Remain </th>
                <th >Shelf_no</th>
                <th >Desctiption</th>
                <th > Edit</th>
                <th > Delete</th>
              </tr>
<?php $x=1; ?>
                    @foreach($magazine as $show)
                    <tr >
                        <td>{{$x}}</td>
                        <td>{{$show->magazine_id}}</td>
                        <td>{{$show->magazine_name}}</td>
                        <td>{{$show->category}}</td>
                        <td>{{$show->languages}}</td>
                        <td>{{$show->author}}</td>
                        <td>{{$show->edition}}</td>
                        <td>{{$show->volume}}</td>
                        <td>{{$show->remain}}</td>
                        <td>{{$show->shelf_no}}</td>
                        <td>{{$show->desctiption}}</td>
                        <td><a  href="/mg_edit/{{$show->id}}" id="edit"><span  id="one" class=" glyphicon glyphicon-edit "></span></a></td>
                      <td><a class="delete" href="/mg_delete/{{$show->id}}" id="edit"><span  id="one" class=" glyphicon glyphicon-trash "></span></a></td>
                    </tr>
                    <?php $x++; ?>
                    @endforeach

                </table>
                  {{$magazine->links()}}
              </div>

    </div>
  </div>
</div>
@stop
