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
          
        <h1 class="h3 mb-2 text-gray-800">Posts</h1>
       
        <br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-body ">
            <div class="table-responsive">
              <table   id="dataTable"  class="table table-striped table-bordered text-center" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>title</th>
                    <th>created_at</th>
                    <th>category Name</th>
                    <th>Change</th>
                    <th>viewCount</th>
                    {{-- <th>created_at</th> --}}
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
                        <td>{!!$post->created_at!!}</td>
                        {{-- category Id --}}
                        <td>{{$post->category->name}}</td>
                       <td>{{$post->count_view}}</td>
                        <td>
                            <a href="{{route('posts.edit', ['id' => $post->id])}}"><i class="fas fa-edit"></i></a>
                            <a href="{{route('posts.showPostByID', ['id' => $post->id])}}"><i class="fas fa-eye"></i></a>
                            <a class="text-danger" href="{{route('posts.destroy', ['id' => $post->id])}}"><i class="fas fa-trash"></i></a>
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



