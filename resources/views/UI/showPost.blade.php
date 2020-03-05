@include('includedUI.header')

	<!-- section -->
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


					<div class="section-row">

                        <figure >
                            <img  style="background-size: cover;" src="{{$post->featured}}" alt="{{$post->title}}">
                        </figure>
						<br>
						<div class="section-title">
							<h3 class="title">{{$post->title}}</h3>
						</div>
						<h1></h1>
						<div class="post-category">
							<h2>{{$post->created_at->toFormattedDateString()}}</h2>
						</div>
						<div class="post-category">
							<a href="{{route('UI.category', ['id' => $post->category->id])}}">{{$post->category->name}}</a>
						</div>
						<br><br>
						<div class="post-category">
						    
						    @include('adsense.ContentAds')
                        </div>
                        <br><br>
                        <p>{!!$post->content!!}</p>

						<br>
						<br>

						<a target="_blank" href="{{route('UI.download', ['slug' => $post->slug])}}">
							<button class="btn btn-success btn-lg "  type="submit">
								<i style="font-size: 18px; ffont-style: lowercase; word-spacing: 20px; " class="fa fa-download fa-lg "> Download</i>
							</button>
						</a>
						<br>
						<br>
						<br>
						<br>
						<br>

    					 <div class="section-row text-center ">
							<div class="section-title">
								<h2 class="title">POPULAR  Posts</h2>
							</div>
							<br>
							<br>
							<br>
							<style>
							    	.prevImg, .nexrImg{
				                                    padding: 5px;
				
				                                }
								.prevImg:hover, .nexrImg:hover{
									opacity: 0.8;
									border-radius: 5px;
									transition: 0.2s;
								}
							</style>
                            <div class="col-md-6">

                                @if (isset($prev))

								<a style="color: white;" href="{{url($prev->slug)}}" >
									<img class="prevImg" width="250" height="150" src="{{$prev->featured}}">
								</a>

                                @endif
                            </div>
                            <div class=" col-md-6">

                                @if (isset($next))
    
                					<a href="{{url($next->slug)}}" >
                             				<img class="nexrImg" width="250" height="150" src="{{$next->featured}}">
                					</a>
                
    							 @endif
                            </div>

						 </div>
                            

                         <br>
                         <br>
                         <br>
                         <br>
						 <br>
						 
					     <div>
                            @include('adsense.topFooterIndex')
                        </div>
						 <br>
                         <br>

                         <br>
                         <br>
						 
                         @include('includedUI.disqus')
                    </div>
					<!-- /post content -->
				</div>


                {{-- aside Part --}}
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

					{{-- vertical Ads --}}
								<!-- Ad widget -->
					<div class="aside-widget text-center">
						<!-- ads -->
							@include('adsense.verticalAdsShow')

					</div>
					<!-- /Ad widget -->



				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->








@include('includedUI.footer')
