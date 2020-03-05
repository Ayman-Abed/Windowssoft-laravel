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


					<div class="section-row text-center">

                        <figure>

                            <img width="300" height="450" style="background-size: cover; background-postion: center;" src="{{$post->featured}}" alt="{{$post->title}}">
                        </figure>

                        <br>
                        <br>
                        <br>

						<div class="section-title">
							<h2 class="title">{{$post->title}}</h2>
						</div>
					
                        <br>
                        <br>
                        <br>
                        
						<a href="{{$post->link}}">
							<button class="btn btn-success btn-lg"  type="submit">
								<i style="font-size: 18px; ffont-style: lowercase; word-spacing: 20px;" class="fa fa-download fa-lg "> Download</i>
							</button>
						</a>

						<br>
						<br>
						<br>
						<br>

						<div class="footer-widget">
							<div class="footer-logo">
							@include('adsense.ContentAds')
							</div>
						</div>
					
						<br>
						<br>
						<br>
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
					@include('adsense.asidAds1Download')
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
				            @include('adsense.asidAds2Download')
					</div>
					<!-- /Ad widget -->


					{{-- vertical Ads --}}
					<!-- Ad widget -->
					<div class="aside-widget text-center">
						<!-- ads -->
							@include('adsense.verticalAdsDownload')

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
