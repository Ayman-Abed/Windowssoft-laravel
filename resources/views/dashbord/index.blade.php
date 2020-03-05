@include('includedDashbord.header')

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('includedDashbord.sidbar')

    {{-- Sidbar --}}


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">



        @include('includedDashbord.navbar')





        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Posts</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$posts->count()}}</div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Categories</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$categories->count()}}</div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

 
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Posts Soft Deleted</div>
                    </div>
                   
                                                
                  </div>
                </div>
              </div>
            </div>



            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Count View Posts</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count_view}}</div>
                    </div>
                   
                                                
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Content Row -->

        </div>
        <!-- /.container-fluid -->
        

      </div>
      <!-- End of Main Content -->






      <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>









@include('includedDashbord.footer')
