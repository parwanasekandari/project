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
 <div class="col-lg-10 col-md-11 col-sm-12 col-xs-12">


     <div class="panel panel-default">

       <div class="panel-heading apanel">
         <div class="row">

           <div class="col-md-5"></div>
           <div class="col-md-6 ">
           <h2 class="text-left astyle" >اضافه نمودن کتاب</h2>
           </div>
           <div class="col-md-1"><a href="javascript:history.back(1)"  class="fa fa-forward back" ></a></div>
          </div>

       </div>
       <div class="panel-body">
       <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
         <form  id="demo-form" data-parsley-validate class="form-horizontal form-label-left" method="post"  action="/dari_insert">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
          <div class="col-sm-11">
            <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="isbn">
          </div>
          <label class="control-label col-sm-1" for="isbn">شماره</label>
          </div>
          <div class="form-group">
          <div class="col-sm-11">
            <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="title">
          </div>
          <label class="control-label col-sm-1" for="isbn">عنوان</label>
          </div>
          <div class="form-group">
          <div class="col-sm-11">
            <select class="form-control col-md-12  " dir="rtl" name="category" id="category">
               <option value="null">انتخاب کنید<option>
              <option value="English">English</option>
              <option value="دری">دری</option>
              <option value="پشتو">پشتو</option>
              <option value="عربی">عربی</option>
            </select>
            <span id="category-error" class="text-danger" hidden>لطفا کتگوری را انتخاب کنید!</span>
            </div>

            <label class="control-label control-label col-sm-1" for="first-name">کتگوری<span class="required">*</span>
            </label>
          </div>
          <div class="form-group">
          <div class="col-sm-11">
            <input type="number"  required="required" class="form-control col-md-7 col-xs-12" name="volume" >
          </div>
          <label class="control-label col-sm-1" for="isbn">تعداد</label>
          </div>
          <div class="form-group">
          <div class="col-sm-11">
            <input type="number"  required="required" class="form-control col-md-7 col-xs-12" name="remain">
          </div>
          <label class="control-label col-sm-1" for="isbn">باقیمانده</label>
          </div>
          <div class="form-group">
          <div class="col-sm-11">
            <input type="date"  required="required" class="form-control col-md-7 col-xs-12" name="date">
          </div>
          <label class="control-label col-sm-1" for="isbn">ثبت</label>
          </div>
          <div class="form-group">
          <div class="col-sm-11">
            <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="author">
          </div>
          <label class="control-label col-sm-1" for="isbn">مولف</label>
          </div>
          <div class="form-group">
          <div class="col-sm-11">
            <input type="text" required="required" class="form-control col-md-7 col-xs-12" name="publisher">
          </div>
          <label class="control-label col-sm-1" for="isbn">ناشر</label>
          </div>
          <div class="form-group">
          <div class="col-sm-11">
            <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="edition">
          </div>
          <label class="control-label col-sm-1" for="isbn">چاپ</label>
          </div>

          <div class="form-group">
          <div class="col-sm-11">
            <input type="number"  required="required" class="form-control col-md-7 col-xs-12" name="pages">
          </div>
          <label class="control-label col-sm-1" for="isbn">صفحات</label>
          </div>

          <div class="form-group">
          <div class="col-sm-11">
            <select class="form-control col-md-7 " dir="rtl" name="shelf_no" id="shelf_no">
              <option value="null">انتخاب تاقچه </option>
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
            <span id="shelf-no-error" class="text-danger" hidden>لطفا نمبر طاقچه را انتخاب کنید!</span>
          </div>
          <label class="control-label col-sm-1" for="isbn">تاقچه</label>
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
