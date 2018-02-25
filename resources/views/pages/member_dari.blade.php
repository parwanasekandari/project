
  @extends('dari_masterpage')
  <link href="/lms/build/css/custom.css" rel="stylesheet">
  @section('search')
  <form action="\member" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="search" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
        <button type="submit" name="search1" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </form>
  @endsection
  @section('content')
<!--  -->
<div class="row">
  <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
    <div class="panel">
      <div class="panel-heading apanel ">
        <div class="row">

          <div class="col-md-5"></div>
          <div class="col-md-6 ">
          <h2 class="text-left astyle" >لیست اعضا</h2>
          </div>
          <div class="col-md-1"><a href="javascript:history.back(1)"  class="fa fa-forward back" ></a></div>
         </div>
      </div>
      <div class="panel-body"  >

        <!-- page content -->
        <div class="right_col" role="main"  >
          <div class="" >


            <div class="clearfix"></div>

            <div class="row" >
              <div class="col-md-12">

                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                      </div>

                      <div class="clearfix"></div>

                      @foreach($member as $show)
                      <div class="col-md-4 col-sm-8 col-xs-12 profile_details" >
                        <div class="well profile_view">
                          <div class=" col-sm-12">
                            <h2 class="brief" style="font-family:Times;"><i><b>{{$show->name}}</b></i></h2>
                            <div class="left  col-md-8 col-sm-12 col-xs-12" >
                                <ul class="list-unstyled">
                                <li> {{$show->email}} <i class="fa fa-envelope-square"></i> </li>
                                <li> {{$show->phone_no}}<i class="fa fa-phone"></i> </li>
                                <p><strong>Department : </strong> {{$show->department}}
                                 <p><strong>ID : </strong>{{$show->member_id}}
                              </ul>
                            </div>
                            <div class="right  col-md-4 col-sm-6 col-xs-8  text-center">
                              <img src="/lms/{{$show->photo}}" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-5 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star star"></span></a>
                                <a href="#"><span class="fa fa-star star"></span></a>
                                <a href="#"><span class="fa fa-star star"></span></a>
                                <a href="#"><span class="fa fa-star-o star"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-7 emphasis">
                              <button type="button" class="btn areset btn-xs"> <i class="fa fa-user">
                                </i> <i class="fa fa-comments-o"></i> </button>
                            <a  href="/dari_member_detail/{{$show->id}}" ><button type="button" class="btn abtn btn-xs">
                                <i class="fa fa-user"> </i> Profile Detail
                              </button> </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach










                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


<!--  -->
</div>
  {{$member->links()}}
</div>
</div>
</div>




    <script src="/lms/build/js/custom.min.js"></script>

@stop
