@extends('masterpage')
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

<div class="col-lg-1 col-md-1"></div>

<div class="row">
 <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">


     <div class="panel panel-default">

       <div class="panel-heading apanel">
      <div class="row">
       <div class="col-md-5"><a href="javascript:history.back(1)"  class="fa fa-backward back" ></a></div>
     <div class="col-md-7 ">
     <h2 class="text-left astyle" >  New Members</h2>
     </div>
   </div>

       </div>

       <div class="panel-body">

         <form  id="demo-form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="/mr_insert" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1" style="text-align:left;" for="first-name">Member ID<span class="required">*</span>
             </label>
             <div class="col-md-7 col-sm-7 col-xs-12">
               <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="m_id">
             </div>
           </div>
           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1" style="text-align:left;" for="first-name">name<span class="required">*</span>
             </label>
             <div class="col-md-7 col-sm-7 col-xs-12">
               <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="name">
             </div>
           </div>
           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1" style="text-align:left;" for="first-name">Last Name<span class="required">*</span>
             </label>
             <div class="col-md-7 col-sm-7 col-xs-12">
               <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="lname">
             </div>
           </div>
           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1" style="text-align:left;" for="first-name">Email<span class="required">*</span>
             </label>
             <div class="col-md-7 col-sm-7 col-xs-12">
               <input type="email"  placeholder="Enter your email" class="form-control col-md-7 col-xs-12" name="email">
             </div>
           </div>
           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1" style="text-align:left;" for="first-name">Phone Number<span class="required">*</span>
             </label>
             <div class="col-md-7 col-sm-7 col-xs-12">
               <input type="varchar(20)"  required="required" class="form-control col-md-7 col-xs-12" name="phone">
             </div>
           </div>

           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1" style="text-align:left;" for="first-name">Department<span class="required">*</span>
             </label>
             <div class="col-md-7 col-sm-7 col-xs-12">
               <select class="form-control col-md-7 col-xs-12" name="department">
                <option>Choose Department</option>
                <option value="Radio Tilouizon">Radio Television</option>
                <option value="press">Press</option>
              </select>
              
             </div>
           </div>
           <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1" style="text-align:left;" for="first-name">Photo<span class="required">*</span>
             </label>
             <div class="col-md-7 col-sm-7 col-xs-12">
               <input type="file" required="required" class="form-control col-md-7 col-xs-12" name="image">
             </div>
           </div>


                               <div class="ln_solid"></div>
                               <div class="form-group">
                                 <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                                   <button type="reset" class="btn areset">Reset</button>
                                   <input type="submit" class="btn abtn" name="submit" value="INSERT">
                                 </div>
                               </div>

                 </form>



       </div>

     </div>


</div>
  </div>
 </div>





@stop
