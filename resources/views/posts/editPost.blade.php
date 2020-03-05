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

        @include('includedDashbord.navbar')


      <!-- Begin Page Content -->
      <div class="container-fluid">
          <br>
        <h1 class="h3 mb-2 text-gray-800">Posts</h1>

        <br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Post {{$posts->title}}</h6>
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


            {{-- becuse this form has image  /// enctype="multipart/form-data" --}}
            {{-- when make dd($request->all())  // dispaly more info For image --}}
            <form action="{{route('posts.updatePost', ['id' => $posts->id])}}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

               <div class="form-group">
                  <label >Select Category</label>
                  <select class="form-control" name="category_id" id="category">
                    @foreach ($categories as $category)
                    {{-- becuse user select the category_id // {{$category->id}}  --}}
                    {{-- becuse display for user to  select {{$category->name}}  --}}
                
                
                        <!-- To make option Slected-->
                    <option value="{{$category->id}}"  {{ ($posts->category_id == $category->id) ? 'selected' : '' }} >
                            {{$category->name}}
                    </option>
                    
                    
                    @endforeach
          
                  </select>
                </div>


              <div class="form-group">
                <label >Title</label>
                <input type="text" class="form-control" name="title" value="{{$posts->title}}">
              </div>

              <div class="form-group">
                <label >Link</label>
                <input type="text" class="form-control" name="link" value="{{$posts->link}}">
              </div>

                <div class="form-group">
                    <label >Content</label>
                    <textarea class="form-control" id="summernote" name="content" value="" rows="10" cols="10">{{$posts->content}}</textarea>
                    
                </div>
                <script>
                    $(document).ready(function() {
                          $('#summernote').summernote({
                            placeholder: 'Write Post',
                            tabsize: 2,
                            height: 300
                          });
                    });
                </script>

               <div class="form-group">
                <label >Example file input</label>
                <input type="file" class="form-control-file" value="{{$posts->featured}}" name="featured">
              </div>
              <button type="submit" class="btn btn-primary">Update Post</button>
            </form>

          </div>
        </div>

      </div>
      <!-- /.container-fluid -->


      <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>







{{-- footer --}}
@include('includedDashbord.footer')
{{-- footer --}}



