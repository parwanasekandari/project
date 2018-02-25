@extends('dari_masterpage')
@section('search')
<form action="#" method="get" class="sidebar-form">
  <div class="input-group">
    <input type="text" name="s" class="form-control" placeholder="جستجو...  ">
    <span class="input-group-btn">
      <button type="submit" name="search1" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
    </span>
  </div>
</form>
@endsection
@section('content')
<div class="row" id="one" >
    <div class="row" style="margin-top:-30px;" >

<img src="/lms/images/banner1.jpg" alt="banner picture"  class="img img-responsive"  style="width:100%;" />

     </div>


  </div>
<!-- main content -->
    <div class="row">

        <div class="panel panel-default col-md-10"  >

          <div class="panel-body "  >

              <!-- for free space -->

                    <!-- End of  free space -->
                <div class="col-md-3 " id="link">
                <h3 style="color:#AB4900; font-family:Andalus;  " class="text-left">لینگ های ارتباطی</h3>
                    <ul style="text-align:left; list-style-type:none;" >
                      <li><a href="#">www.library MIs.org <span class="fa fa-globe" style="font-size:18px"></span></a></li>
                      <li><a href="#"> www.facebook.com <span class=" fa fa-facebook-square" style="font-size:18px"></span></a></li>
                      <li><a href="#">Info@library MIs.org <span class="fa fa-info-circle" style="font-size:18px"></span></a></li>
                      <li><a href="#">0705569301 <span class="fa fa-phone-square" style="font-size:18px"></span></a></li>
                    </ul>
                </div>

                <div class="col-md-9">

                 <!-- select code -->
                    @foreach($d_post as $new)

                  <h2 class="text-center" style="color:#AB4900; font-family: Andalus;">{{$new->title}}</h2>
                  <p class="text-justify" style="font-size:18px; font-family:Simplified Arabic;">
                    {{$new->post}}
                  </p>


                   <a  href="/d_post_edit/{{$new->id}}" id="edit"><span  id="one" class=" glyphicon glyphicon-edit "> </span>&nbspویرایش</a>
                  </div>


                              @endforeach
          </div>

      </div>




    </div>

    <!-- social link css code -->
    <style media="screen">
      #link ul li{
        line-height: 28px;
      }
      #link ul li a{
        font-size: 16px;
        color:black;
      }
      #link ul li a:hover{
        color:black;
        text-transform:capitalize;
      }
      #one{
        font-size:20px;

      }

    </style>
@stop
