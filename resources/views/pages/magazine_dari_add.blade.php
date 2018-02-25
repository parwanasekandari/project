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
           <h2 class="text-left astyle" >اضافه نمودن مجله</h2>
           </div>
           <div class="col-md-1"><a href="javascript:history.back(1)"  class="fa fa-forward back" ></a></div>
          </div>

       </div>
       <div class="panel-body">
         <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
         <form  id="demo-form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="/dari_mg_insert" >
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="form-group">
            <div class="col-sm-11">
              <input type="text"   required="required" class="form-control col-md-7 col-xs-12" name="isbn">
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
              <select class="form-control col-md-12  " dir="rtl" name="category">
                 <option>انتخاب کتگوری<option>
                <option value="English">English</option>
                <option value="دری">دری</option>
                <option value="پشتو">پشتو</option>
                <option value="عربی">عربی</option>
              </select>
            
            </div>
            <label class="control-label col-sm-1" for="isbn">لسان</label>
            </div>

            <div class="form-group">
            <div class="col-sm-11">

              <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="author">
            </div>
            <label class="control-label col-sm-1" for="isbn">نویسنده</label>
            </div>

            <div class="form-group">
            <div class="col-sm-11">
              <input type="text"   required="required" class="form-control col-md-7 col-xs-12" name="edition">
            </div>
            <label class="control-label col-sm-1" for="isbn">چاپ</label>
            </div>

            <div class="form-group">
            <div class="col-sm-11">
              <input type="text"   required="required" class="form-control col-md-7 col-xs-12" name="volume">
            </div>
            <label class="control-label col-sm-1" for="isbn">تعداد</label>
            </div>

            <div class="form-group">
            <div class="col-sm-11">
              <input type="text"   required="required" class="form-control col-md-7 col-xs-12" name="remain">
            </div>
            <label class="control-label col-sm-1" for="isbn">باقیمانده</label>
            </div>

                      <div class="form-group">
                      <div class="col-sm-11">
                        <select class="form-control col-md-7 " dir="rtl" name="shelf_no">
                          <option value="الف">الف</option>
                          <option value="ب">ب</option>
                          <option value="پ">پ</option>
                          <option value="ت">ت</option>
                          <option value="ث">ث</option>
                          <option value="ج">ج</option>
                          <option value="چ">چ</option>
                          <option value="ح">ح</option>
                          <option value="خ">خ</option>
                          <option value="د">د</option>
                          <option value="ذ">ذ</option>
                          <option value="د">ر</option>
                          <option value="ز">ز</option>
                          <option value="س">س</option>
                          <option value="ش">ش</option>
                          <option value="ض">ص</option>
                          <option value="ص">ب</option>
                          <option value="ط">ط</option>
                          <option value="ظ">ظ</option>
                          <option value="ع">ع</option>
                          <option value="ف">ف</option>
                          <option value="ق">ق</option>
                          <option value="ک">ک</option>
                          <option value="گ">گ</option>
                          <option value="ل">ل</option>
                          <option value="م">م</option>
                          <option value="ن">ن</option>
                          <option value="و">و</option>
                          <option value="ی">ی</option>

                        </select>
                      </div>
                      <label class="control-label col-sm-1" for="isbn">تاقچه</label>
                      </div>

            <div class="form-group">
            <div class="col-sm-11">
              <textarea name="description" rows="8" cols="73 "  ></textarea>
            </div>
            <label class="control-label col-sm-1" for="isbn">جزییات</label>
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
