
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


			{{-- Note For my web --}}
            <!-- /row -->

			<div class="row">
				<div class="col-md-12 section-row text-center">
                    <div  data-aos="fade-up" class="alert alert-info   fade in alert-dismissible show" role="alert">
                        <strong>The Best Choice After Install Windows</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <strong><span aria-hidden="true">&times;</span>
                        </button>
                        <script>
                            AOS.init();
                        </script>
                    </div>

				</div>
            </div>

			<!-- /row -->




		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->




	<!-- SECTION -->
    
	<div class="section" >
		<!-- container -->
		<div class="container">
			<!-- row -->
            <!-- for nav bar // id="Package"-->
			<div data-aos="fade-up"  class="row" id="Package">
				<div class="section-title">
					<h2 class="title">Package</h2>
				</div>
				@foreach ($posts as $post)

				@if ($post->category->name == "Package")

					<div class="col-md-4">


						<!-- post -->
						<div class="post">
							<a class="post-img" href="{{route('UI.showPost', ['slug' => $post->slug])}}">
								<img  src="{{$post->featured}}" alt="{{$post->title}}">
							</a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{route('UI.category', ['id' => $post->category->id])}}">{{$post->category->name}}</a>

								</div>
								<h3 class="post-title">
									<a href="{{route('UI.showPost', ['slug' => $post->slug])}}">{{$post->title}}</a>
									{{-- <span style="float:right;color: gray" ><i class="fa fa-eye"></i> {{$post->count_view}}</span> --}}

								</h3>


								<ul class="post-meta">
									{{-- count open this post --}}
									<li>{{$post->created_at->toFormattedDateString()}}</li>

										@if ($post->count_view > 100)
											<div>
												<i class="fa fa-star" style="color: #f2b01e"></i>
												<i class="fa fa-star" style="color: #f2b01e"></i>
												<i class="fa fa-star" style="color: #f2b01e"></i>
												<i class="fa fa-star" style="color: #f2b01e"></i>
												<i class="fa fa-star-half-o" aria-hidden="true" style="color: #f2b01e"></i>
											</div>
										@else
											<div>
												<i class="fa fa-star" style="color: #f2b01e"></i>
												<i class="fa fa-star" style="color: #f2b01e"></i>
												<i class="fa fa-star" style="color: #f2b01e"></i>
												<i class="fa fa-star" style="color: #f2b01e"></i>
												<i class="fa fa-star-half-o" aria-hidden="true" style="color: #f2b01e"></i>
											</div>
										@endif

									</li>
									{{-- count open this post --}}


								</ul>
							</div>
						</div>
						<!-- /post -->
					</div>
				@endif
				@endforeach

			</div>

			<!-- /row -->


			<div class="section-title">
				<h2 class="title">POPULAR  :: Latest Version</h2>
            </div>


            <!-- for nav bar // id="Pobular"-->
			<!-- row -->
			<div data-aos="fade-up"  class="row" id="Pobular">

				@foreach ($posts as $post)

				@if ($post->category->name == "Pobular")

					<div class="col-md-4 col-sm-6">
						<!-- post -->
						<div class="post post-widget">
							<style>
								.thumbnail:hover{
									opacity: 0.9;
								}
								.thumbnail{
									padding: 0px;
								}

							</style>
							<a class="post-img" href="{{route('UI.showPost', ['slug' => $post->slug])}}">
								<div class="thumbnail" style="border: none;" >
									<img  style="background-size: cover; height: 100px;" src="{{$post->featured}}" alt="{{$post->title}}">
								</div>
							</a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{route('UI.category', ['id' => $post->category->id])}}">{{$post->category->name}}</a>

								</div>
								<h3 class="post-title">
									<a href="{{route('UI.showPost', ['slug' => $post->slug])}}">
										{{$post->title}}
									</a>
									{{-- <span style="float:right;color: gray" ><i class="fa fa-eye"></i> {{$post->count_view}}</span> --}}

								</h3>


								<ul class="post-meta">
									{{-- count open this post --}}
									@if ($post->count_view > 100)
										<div>
											<i class="fa fa-star" style="color: #f2b01e"></i>
											<i class="fa fa-star" style="color: #f2b01e"></i>
											<i class="fa fa-star" style="color: #f2b01e"></i>
											<i class="fa fa-star" style="color: #f2b01e"></i>
											<i class="fa fa-star-half-o" aria-hidden="true" style="color: #f2b01e"></i>
										</div>
									@else
										<div>
											<i class="fa fa-star" style="color: #f2b01e"></i>
											<i class="fa fa-star" style="color: #f2b01e"></i>
											<i class="fa fa-star" style="color: #f2b01e"></i>
											<i class="fa fa-star" style="color: #f2b01e"></i>
											<i class="fa fa-star-half-o" aria-hidden="true" style="color: #f2b01e"></i>
										</div>
									@endif

								</ul>

							</div>
						</div>
						<!-- /post -->
					</div>
				@endif
				@endforeach

			</div>
			<!-- /row -->
			
			
				<br>
				<br>
				<br>
				<br>
			
			
			
			
			{{-- for make paginate --}}
			{{-- just dispaly 30 app --}}
		
				<div class="paginate text-center">
					{{ $posts->links() }}
				</div>
		
			{{-- for make paginate --}}
			
			
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			
			
			
			
			
			
			
				<!-- row -->

			        <div class="row">
			
			
			
			                <div class="col-md-4">
			                    <!-- post -->
			                    <div class="post">
			                      <!-- ads -->
			                      	@include('adsense.aside1Index')
			                    
						        <!-- ads -->
			                    </div>
			                    <!-- /post -->
			                </div>
			
			                <div class="col-md-4">
			                    <!-- post -->
			                    <div class="post">
			                       <!-- ads -->
			                       @include('adsense.aside2Index')
			                       
						        <!-- ads -->
			                    </div>
			                    <!-- /post -->
			                </div>
			
			                <div class="col-md-4">
			                    <!-- post -->
			                    <div class="post">
			                     <!-- ads -->
			                     @include('adsense.aside3Index')
						        <!-- ads -->
			                    </div>
			                    <!-- /post -->
			                </div>
			
			
			        </div>
			
			        <!-- /row -->
			
			
			
			

		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->














	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ad -->
				<div class="col-md-12 section-row text-center">
					<!-- ads -->
					@include('adsense.topFooterIndex')
					
  				<!-- ads -->
				</div>
				<!-- /ad -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->


@include('includedUI.footer')
