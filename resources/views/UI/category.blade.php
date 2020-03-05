@include('includedUI.header')

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
		    
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
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
				
					<div class="section-title">
						<h2 class="title">Category  ::  {{$category->name}}</h2>
					</div>
					
					@foreach ($category->posts as $post)
						
					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="{{route('UI.showPost', ['slug' => $post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								 
								<a href="{{route('UI.showPost', ['slug' => $post->slug])}}">{{$post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="{{route('UI.showPost', ['slug' => $post->slug])}}">{{$post->title}}</a></h3>
							<ul class="post-meta">
								<li>{{$post->created_at->toFormattedDateString()}}</li>
							</ul>
							
						</div>
					</div>
					<!-- /post -->


					@endforeach
				</div>

				 
				<div class="col-md-4">
					<!-- ad widget -->
					<div class="aside-widget text-center">
						<!-- ads -->
							@include('adsense.asidAds1Show')
						<!-- ads -->
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



		



					<!-- Ad widget -->
					<div class="aside-widget text-center">
						<!-- ads -->
							@include('adsense.asidAds2Show')
						<!-- ads -->
					</div>
					<!-- /Ad widget -->
				</div>

		

		
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->






@include('includedUI.footer')
