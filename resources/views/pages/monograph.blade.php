@extends('masterpage')
@section('search')
<form action="\monograph" method="get" class="sidebar-form">
  <div class="input-group">
    <input type="text" name="search" class="form-control" placeholder="Search...">
    <span class="input-group-btn">
      <button type="submit" name="search1" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
    </span>
  </div>
</form>
@endsection

@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="panel ">
    <div class="panel-heading apanel">
      <div class="row">
       <div class="col-md-5"><a href="javascript:history.back(1)"  class="fa fa-backward back" ></a></div>
       <div class="col-md-7 ">
       <h2 class="text-left astyle" >Monograph List</h2>
       </div>
      </div>

    </div>
    <div class="panel-body"  >
        <div class="table-responsive">

          <table class="table table-striped table-bordered table-condensed table-hover">

                          <tr class="atable">
                              <th> NO </th>
                              <th> Monograph Author </th>
                              <th> Monograph Name </th>
                              <th> Supervisor</th>
                              <th> Department</th>
                              <th> Year</th>
                              <th> Description</th>
                              <th> Edit</th>
                              <th> Delete</th>


                          </tr>
                          <?php $x=1; ?>
                          @foreach($monograph as $show)
                            <tr>
                              <td>{{$x}}</td>
                              <td>{{$show->monograph_owner}}</td>
                              <td>{{$show->mongraph_name}}</td>
                              <td>{{$show->supervisor}}</td>
                              <td>{{$show->department}}</td>
                              <td>{{$show->m_year}}</td>
                               <td>{{$show->description}}</td>
                              

                            <td><a  href="/m_edit/{{$show->id}}" ><span  id="one" class=" glyphicon glyphicon-edit "></span></a></td>
                            <td><a  class="delete" href="/deletes/{{$show->id}}" ><span  id="one" class=" glyphicon glyphicon-trash "></span></a></td>
                            </tr>
                            <?php $x++; ?>
                          @endforeach

          </table>
          {{$monograph->links()}}

        </div>
      </div>
    </div>
  </div>



@stop
