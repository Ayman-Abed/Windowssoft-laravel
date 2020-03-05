@include('includedDashbord.header')


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    {{-- sidbar --}}

    @include('includedDashbord.sidbar')

    {{-- sidbar --}}

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

            {{-- navbar --}}
            @include('includedDashbord.navbar')
            {{-- navbar --}}



        <!-- Begin Page Content -->



        <div class="container-fluid">
          <!-- Content Row -->


          <!-- Content Row -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    <br>
    <br>
    <br>
    <br>




    <div class="container-fluid">
    {{-- dont need foreach just get doctors from doctorController --}}
    <div class="alert alert-success " role="alert">
        Show Post : {{$posts->title}}
    </div>
    <br>


        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="alert alert-secondary " role="alert">
                    Title :   <span style="color:red">{{$posts->title}}</span>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="alert alert-secondary" role="alert">
                    Category :   <span style="color:red">{{$posts->category->name}}</span>
                </div>
            </div>
        </div>


    
        <div class="row">

            <div class="col-xl-12 col-md-12">
                <div class="alert alert-secondary" role="alert">
                    Link :   <span style="color:red">{{$posts->link}}</span>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div height="400px" class="alert alert-secondary" role="alert">
                    Content :   <span style="color:red">{!!$posts->content!!}</span>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-xl-12 col-md-12">
                Image 
                <div class="alert alert-secondary" role="alert">
                    <img width="250" height="200" src="{{$posts->featured}}">
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="alert alert-secondary" role="alert">
                    created_at :   <span style="color:red">{{$posts->created_at}}</span>
                </div>
            </div>

            <div class="col-xl-6 col-md-6">
                <div class="alert alert-secondary" role="alert">
                    updated_at :   <span style="color:red">{{$posts->updated_at}}</span>
                </div>
            </div>

        </div>


    </div>



      <!-- /.container-fluid -->


      <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>





@include('includedDashbord.footer')






