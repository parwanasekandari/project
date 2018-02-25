@extends('dari_masterpage')
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
  <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
    <div class="panel">
      <div class="panel-heading apanel ">
        <div class="row">

          <div class="col-md-5"></div>
          <div class="col-md-6 ">
          <h2 class="text-left astyle" >لیست کتاب ها</h2>
          </div>
          <div class="col-md-1"><a href="javascript:history.back(1)"  class="fa fa-forward back" ></a></div>
         </div>
      </div>
      <div class="panel-body"  >
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover " >
              <tr class="atable">
                <th class="text-center">شماره</th>
                <th  class="text-center">آی دی</th>
                <th  class="text-center">عنوان</th>
                <th  class="text-center"> کتگوری</th>
                <th class="text-center" >نویسنده</th>
                <th  class="text-center">انتشارکننده</th>
                <th class="text-center">تعداد</th>
                <th class="text-center">باقیمانده</th>
                <th  class="text-center">چاپ</th>
                <th  class="text-center">تاریخ ثبت</th>
                <th  class="text-center">تاقچه</th>
                <th colspan="2" class="text-center">مدیریت</th>

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

            <td><a  href="/dari_edit/{{$show->id}}" ><span  id="one" class=" glyphicon glyphicon-edit "></span></a></td>
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
