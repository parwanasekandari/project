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
          <h2 class="text-left astyle" >لیست عاریت مجلات </h2>
          </div>
          <div class="col-md-1"><a href="javascript:history.back(1)"  class="fa fa-forward back" ></a></div>
         </div>
      </div>
      <div class="panel-body"  >
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
              <tr class="atable">
                <th >شماره</th>
                <th > آیدی عضو</th>
                <th >نام عضو</th>
                <th >نام مجله</th>
                <th >آیدی مجله</th>
                <th >اخذ</th>
                <th >برگشت</th>
                <th >ویرایش</th>
                <th >حذف</th>
              </tr>

          <?php $x=1; ?>
           @foreach($magazine as $show)
         <tr>
             <td>  {{$x}}</td>
             <td> {{$show->member_id}} </td>
             <td> {{$show->name}} </td>
             <td> {{$show->magazine_name}} </td>
             <td> {{$show->magazine_id}} </td>
             <td> {{$show->date_borrow}} </td>
             <td> {{$show->return_date}} </td>
             <td><a  href="/dari_mag_barrow_edit/{{$show->id}}" ><span  id="one" class=" glyphicon glyphicon-edit "></span></a></td>
             <td><a class="delete" href="/magazine_barrow_delete/{{$show->id}}" ><span  id="one" class=" glyphicon glyphicon-trash "></span></a></td>
           </tr>
           <?php $x++; ?>

           @endforeach
         </table>
         <div class="col-md-10">
           {{$magazine->links()}}</div>

           <div class="col-md-2 ">  <a href="dari_mgborrow_insert" class="btn abtn "> New Borrow</a></div>
       </div>
     </div>
     </div>
     </div>
     </div>
@stop
