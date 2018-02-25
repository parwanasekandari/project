@extends('dari_masterpage')
@section('search')
<form action="#" method="get" class="sidebar-form">
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
          <h2 class="text-left astyle" >لیست عاریت کتاب ها</h2>
          </div>
          <div class="col-md-1"><a href="javascript:history.back(1)"  class="fa fa-forward back" ></a></div>
         </div>
      </div>
      <div class="panel-body"  >
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
              <tr class="atable">
                <th class="text-center">شماره</th>
                <th class="text-center" >آیدی عضو</th>
                <th class="text-center" >نام</th>
                <th class="text-center" >عنوان کتاب</th>
                <th class="text-center" >آیدی کتاب</th>
                <th class="text-center" >تاریخ اخذ</th>
                <th class="text-center" >تاریخ برگشت</th>
                <th class="text-center" >ویرایش</th>
                <th class="text-center" >حذف</th>
              </tr>

          <?php $x=1; ?>
           @foreach($borrow as $show)
         <tr>
             <td>  {{$x}}</td>
             <td> {{$show->member_id}} </td>
             <td> {{$show->name}} </td>
             <td> {{$show->title}} </td>
             <td> {{$show->isbn}} </td>
             <td> {{$show->date_borrow}} </td>
             <td> {{$show->	return_date}} </td>
             <td><a  href="/book_borrow_edit/{{$show->id}}" ><span  id="one" class=" glyphicon glyphicon-edit "></span></a></td>
             <td><a class="delete" href="/borrow_delete/{{$show->id}}" ><span  id="one" class=" glyphicon glyphicon-trash "></span></a></td>

      </tr>
      <?php $x++; ?>

      @endforeach
    </table>

    <div class="col-md-10">
      {{$borrow->links()}}</div>

      <div class="col-md-2 ">  <a href="dari_barrow_insert" class="btn abtn "> اضافه نمودن</a></div>
  </div>
</div>
</div>
</div>
</div>


@stop
