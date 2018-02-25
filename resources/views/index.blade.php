@extends('masterpage')
@section('search')
<form action="#" method="get" class="sidebar-form">
  <div class="input-group">
    <input type="text" name="s" class="form-control" placeholder="Search...">
    <span class="input-group-btn">
      <button type="submit" name="search1" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
    </span>
  </div>
</form>
@endsection
@section('content')
<div class="row" id="one" >
    <div class="row" style="margin-top:-30px;" >

<img src="/lms/images/banner1.jpg" alt="banner picture"  class="img img-responsive" />

     </div>


  </div>
<!-- main content -->
    <div class="row">

        <div class="panel panel-default "  >

          <div class="panel-body "  >
            <div class="col-md-8">

             <!-- select code -->
                @foreach($post as $new)

              <h2 class="text-center" style="color:#AB4900; font-family: Times New Roman;">{{$new->title}}</h2>
              <p class="text-justify">
                {{$new->post}}
              </p>


               <a  href="/p_edit/{{$new->id}}" id="edit"><span  id="one" class=" glyphicon glyphicon-edit "></span>Edit</a>
              </div>
              <!-- for free space -->
                <div class="col-md-1"></div>
                    <!-- End of  free space -->
                <div class="col-md-3" id="link">
                <h3 style="color:#AB4900;   font-family: Times New Roman;" class="text-center">Our Social Links</h3>
                    <ul style="text-align:left; list-style-type:none;" >
                      
                      <li><a href="#"><span class=" fa fa-facebook-square" style="font-size:18px"></span> www.facebook.com</a></li>
                      <li><a href="#"><span class="fa fa-info-circle" style="font-size:18px"></span>Info@library MIs.org</a></li>
                      <li><a href="#"><span class="fa fa-phone-square" style="font-size:18px"></span>0705569301</a></li>
                    </ul>
                </div>


                              @endforeach
          </div>

      </div>




    </div>

    <!-- social link css code -->
    <style media="screen">
      #link ul li{
        line-height: 20px;
      }
      #link ul li a{
        font-size: 14px;
        color:black;
      }
      #link ul li a:hover{
        color:black;
        text-transform:capitalize;
      }

    </style>
@stop
