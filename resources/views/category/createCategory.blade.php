@include('includedDashbord.header')

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">


    {{-- Sidbar --}}
    @include('includedDashbord.sidbar')

    {{-- Sidbar --}}










    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

     {{-- navbar --}}
        @include('includedDashbord.navbar')
      {{-- navbar --}}

   



      <!-- Begin Page Content -->
      <div class="container-fluid">
          <br>
        <h1 class="h3 mb-2 text-gray-800">Categories</h1>

        <br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Category</h6>
          </div>


            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul class="navbar-nav mr-auto">    
                        @foreach ($errors->all() as $error)
                            <li class="nav-item active">{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

          <div class="card-body">





            <form action="{{route('category.store')}}" method="POST">

                {{ csrf_field() }}

              <div class="form-group">
                <label >Category Name</label>
                <input type="text" class="form-control" name="name"   placeholder="Category Name">
              </div>
     
              <button type="submit" class="btn btn-primary">Create Category</button>
            </form>

          </div>
        </div>

      </div>
      <!-- /.container-fluid -->


      <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>







{{-- footer --}}
@include('includedDashbord.footer')
{{-- footer --}}



