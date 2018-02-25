@extends('masterpage')
@section('search')
<form action="book" method="GET" class="sidebar-form">
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
    <div class="panel">
      <div class="panel-heading apanel ">
        <div class="row">
          <div class="col-md-5"><a href="javascript:history.back(1)" class="fa fa-backward back" ></a></div>
        <div class="col-md-7 ">
        <h2 class="text-left astyle" >  Book  List</h2>
        </div>
      </div>
      </div>
      <div class="panel-body"  >
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover ">
              <tr class="atable">
                <th >NO</th>
                <th >ISBN</th>
                <th >Book Title</th>
                <th > Category</th>
                <th >Author</th>
                <th >Publisher</th>
                <th>Volume</th>
                <th>Remain</th>
                <th >Edition</th>
                <th >Reg_Date</th>
                <th >Shelf NO</th>
                <th colspan="2">Manage</th>

              </tr>

<?php $x=1; ?>
        @foreach($book as $show)
        <tr  >


            <td>  {{$x}}</td>
            <td>  {{$show->isbn}}</td>
            <td>  {{$show->title}}</td>
            <td>  {{$show->category}}</td>
            <td>  {{$show->author}}</td>
            <td>  {{$show->publisher}}</td>
            <td>  {{$show->volume}}</td>
            <td>  {{$show->remain_book}}</td>
            <td>  {{$show->edition}}</td>
            <td>  {{$show->reg_date}}</td>
            <td>  {{$show->shelf_no}}</td>

            <td><a  href="/edit/{{$show->id}}" ><span  id="one" class=" glyphicon glyphicon-edit "></span></a></td>
          <td><a    class="delete" href="/b_delete/{{$show->id}}"   ><span  id="one" class=" glyphicon glyphicon-trash "></span></a></td>



        </tr>
<?php $x++; ?>
            @endforeach
                    </table>
                    {{$book->links()}}-
        </div>
      </div>
    </div>
  </div>





</div>


@stop
