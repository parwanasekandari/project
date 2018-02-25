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
           <h2 class="text-left astyle" >ویرایش کتاب</h2>
           </div>
           <div class="col-md-1"><a href="javascript:history.back(1)"  class="fa fa-forward back" ></a></div>
          </div>

       </div>

       <div class="panel-body">
         <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">

         <form  id="demo-form" data-parsley-validate class="form-horizontal form-label-left"  class="form-inline" role="form" method="post"  action="/dari_update/{{$book->id}}">
           {{method_field('patch')}}
          <input type="hidden" name="_token" value="{{csrf_token()}}">

           <!--  -->
           <div class="form-group">
           <div class="col-sm-11">
             <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="isbn" value="{{$book->isbn}}">
           </div>
           <label class="control-label col-sm-1" for="isbn">شماره</label>
           </div>
           <div class="form-group">
           <div class="col-sm-11">
             <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="title" value="{{$book->title}}">
           </div>
           <label class="control-label col-sm-1" for="title">عنوان</label>
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
           <label class="control-label col-sm-1" for="title">کتگوری</label>
           </div>
           <div class="form-group">
           <div class="col-sm-11">
             <input type="number"  required="required" class="form-control col-md-7 col-xs-12" name="volume"value="{{$book->volume}}">
           </div>
           <label class="control-label col-sm-1" for="title">تعداد</label>
           </div>
           <div class="form-group">
           <div class="col-sm-11">
             <input type="number"  required="required" class="form-control col-md-7 col-xs-12" name="remain"value="{{$book->remain_book}}">
           </div>
           <label class="control-label col-sm-1" for="title">باقیمانده</label>
           </div>
           <div class="form-group">
           <div class="col-sm-11">
             <input type="date"  required="required" class="form-control col-md-7 col-xs-12" name="date" value="{{$book->reg_date}}">
           </div>
           <label class="control-label col-sm-1" for="title">ثبت</label>
           </div>
           <div class="form-group">
           <div class="col-sm-11">
             <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="author" value="{{$book->author}}">
           </div>
           <label class="control-label col-sm-1" for="title">نویسنده</label>
           </div>
           <div class="form-group">
           <div class="col-sm-11">
             <input type="text" required="required" class="form-control col-md-7 col-xs-12" name="publisher" value="{{$book->publisher}}">
           </div>
           <label class="control-label col-sm-1" for="title">ناشر</label>
           </div>
           <div class="form-group">
           <div class="col-sm-11">
             <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="edition" value="{{$book->edition}}">
           </div>
           <label class="control-label col-sm-1" for="edition">چاپ</label>
           </div>
           <div class="form-group">
           <div class="col-sm-11">
             <input type="number"  required="required" class="form-control col-md-7 col-xs-12" name="pages" value="{{$book->pages}}">
           </div>
           <label class="control-label col-sm-1" for="pages">صفحات</label>
           </div>
           <div class="form-group">
           <div class="col-sm-11">

             <select class="form-control col-md-7 " dir="rtl" name="shelf_no">
              <option>انتخاب تاقچه<option>
               <option>{{$book->shelf_no}}<option>
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
           <label class="control-label col-sm-1" for="pages">تاقجه</label>
           </div>

           <div class="col-md-7 ">  </div>

           <div class="col-md-4 " >

              <input type="submit" class="btn abtn" name="submit" value="ویرایش">
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
