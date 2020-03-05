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


      {{-- cards --}}
      @include('includedDashbord.cards')
      {{-- cards --}}




      <!-- Begin Page Content -->
      <div class="container-fluid">
          <br>
        <h1 class="h3 mb-2 text-gray-800">Categories</h1>
       
        <br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cateogry</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Created_at</th>
                    <th>Change</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($categories as $category)
                  <tr class="text-center">
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at}}</td>
                        <td>
                            <a href="{{route('category.edit', ['id' => $category->id])}}"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-eye"></i></a>
                            <a href="{{route('category.destroy', ['id' => $category->id])}}"><i class="fas fa-trash"></i></a>
                        </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->















      <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>







{{-- footer --}}
@include('includedDashbord.footer')
{{-- footer --}}



