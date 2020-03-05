
@include('includedUI.header')


<!-- PAGE HEADER -->
	<div class="container" style="padding: 20px; ">
   		<!-- row -->
			<div class="row">
				<div class="col-md-12 section-row text-center">
				<!-- ads -->
					@include('adsense.headerAds')
				<!-- ads -->
				</div>
				<!-- /ad -->
			</div>
			<!-- /row -->
	    
	    
		<div class="row">
			<div class="col-md-10">
				<div class="post-category ">
                <br>
					 <h4 class="text-primary">Search result : {{$query}}</h4>
				</div>
		
			</div>
        </div>
    
	</div>
<!-- /PAGE HEADER -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- post -->
                    
                    @if ($posts->count() > 0)
                        
                    @foreach ($posts as $post)
                        
                        
					<div class="post post-row">
						<a class="post-img" href="{{route('UI.showPost', ['slug' => $post->slug])}}">
                            <img src="{{$post->featured}}" alt="{{$title}}">
                        </a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{$post->title}}</a></h3>
							<ul class="post-meta">
								<li>{{$post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
                    
                    @endforeach

                    @else
                    
     
                                        
   					<!-- post -->
					<div class=" post post-row" data-aos="zoom-in-down">
 						<div class="post-body">
							<div class="post-category">
									<h3 class=" text-danger">  No results found !!!</h3>
 							</div>
 							
 						
 						</div>
					</div>
					<!-- /post --> 
                    @endif
					<!-- /post -->
                    
             		<div class="post-category">
					    
					    @include('adsense.ContentAds')
                    </div>
		
				</div>





				<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
				@include('adsense.asidAds1Show')
					</div>
					<!-- /ad widget -->




                    <!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
							@foreach ($categories as $category)
								<li><a href="{{route('UI.category', ['id' => $category->id])}}">{{$category->name}} <span>{{$category->posts->count()}}</span></a></li>
							@endforeach
							</ul>
						</div>
					</div>
					<!-- /category widget -->





                    		<!-- ad widget-->
					<div class="aside-widget text-center">
				@include('adsense.asidAds2Show')
					</div>
					<!-- /ad widget -->

			
		


				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->





@include('includedUI.footer')
