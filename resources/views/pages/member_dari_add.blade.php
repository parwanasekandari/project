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
<div class="row">



<div class="row">
 <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">


     <div class="panel panel-default">

       <div class="panel-heading apanel">
         <div class="row">

           <div class="col-md-5"></div>
           <div class="col-md-6 ">
           <h2 class="text-left astyle" >اضافه نمودن عضو جدید</h2>
           </div>
           <div class="col-md-1"><a href="javascript:history.back(1)"  class="fa fa-forward back" ></a></div>
          </div>

       </div>

       <div class="panel-body">
         <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
         <form  id="demo-form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="dari_member_insert" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}">

          <div class="form-group">
          <div class="col-sm-11">
            <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="m_id">
          </div>
          <label class="control-label col-sm-1" for="isbn">شماره</label>
          </div>

          <div class="form-group">
          <div class="col-sm-11">
            <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="name">
          </div>
          <label class="control-label col-sm-1" for="isbn">نام</label>
          </div>

          <div class="form-group">
          <div class="col-sm-11">
            <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="lname">
          </div>
          <label class="control-label col-sm-1" for="isbn">تخلص</label>
          </div>


          <div class="form-group">
          <div class="col-sm-11">
            <input type="email"  required="required" class="form-control col-md-7 col-xs-12" name="email">
          </div>
          <label class="control-label col-sm-1" for="isbn">ایمیل</label>
          </div>

          <div class="form-group">
          <div class="col-sm-11">
            <input type="number"  required="required" class="form-control col-md-7 col-xs-12" name="phone">
          </div>
          <label class="control-label col-sm-1" for="isbn">موبایل</label>
          </div>

          <div class="form-group">
          <div class="col-sm-11">
            <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="department">
          </div>
          <label class="control-label col-sm-1" for="isbn">دیپارتمنت</label>
          </div>

          <div class="form-group">
          <div class="col-sm-11">
            <input type="file" required="required" class="form-control col-md-7 col-xs-12" name="image">
          </div>
          <label class="control-label col-sm-1" for="isbn">عکس</label>
          </div>
          <div class="col-md-7 ">  </div>

          <div class="col-md-4 " >

             <input type="submit" class="btn abtn" name="submit" value="ثبت">
             <button type="reset" class="btn areset">پاک کردن</button>
          </div>

                 </form>
               </div>
               <div class="col-md-2"></div>
               </div>

            </div>

            </div>


            </div>
            </div>
            </div>
@stop
