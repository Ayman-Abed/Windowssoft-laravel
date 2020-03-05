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
        <h1 class="h3 mb-2 text-gray-800">Posts Soft Deleted</h1>

        <br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Posts Soft Deleted</h6>
          </div>
          <div class="card-body">
               @if ($posts->count() == 0)
                      <div class="alert alert-danger">
                          No Posts Deleted
                      </div>
                  @endif
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>title</th>
                    <th>Content</th>
                    <th>category id</th>
                    <th>Change</th>
                    {{-- <th>deleted_at</th>
                    <th>created_at</th> --}}
                  </tr>
                </thead>

                <tbody>
                  @foreach ($posts as $post)

                  <tr class="text-center">
                        <td>{{$post->id}}</td>
                        <td>

                          <img class="img-fluid img-thumbnail" alt="{{$post->title}}" width="100" height="100" src="{{$post->featured}}">

                        </td>
                        <td>{{$post->title}}</td>
                        <td>{!!$post->content!!}</td>
                        <td>{{$post->category->name}}</td>

                        <td>
                            <a href="{{route('posts.restore', ['id' => $post->id])}}">
                              <i class="fas fa-trash-restore"></i>
                            </a>
                            <a class="text-danger" href="{{route('posts.hdelete', ['id' => $post->id])}}">
                              <i class="fas fa-trash"></i>
                            </a>
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



