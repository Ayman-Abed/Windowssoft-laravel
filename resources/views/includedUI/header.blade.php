<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	{!! SEOMeta::generate() !!}


	




	<meta name="author" content="Ayman Abed">

    <link rel="canonical" href="https://windowssoft.net/" />

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
         rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
             crossorigin="anonymous">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('css/UIStyle/bootstrap.min.css')}}" />
	<!-- Font Awesome Icon -->

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('css/UIStyle/style.css')}}" />
	<link  rel="icon" href="{{asset('./img/logo2.png')}}" />


    {{-- AOS Animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- AOS Animation --}}

    {{-- AOS Animation --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- AOS Animation --}}



<!--google Analysis-->




<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145380136-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145380136-1');
</script>


<!--google Analysis-->


<!--Google Adsesnse  1-->

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7059460345818162",
    enable_page_level_ads: true
  });
</script>

<!--Google Adsesnse  1-->

<!--ads-->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script> (adsbygoogle = window.adsbygoogle || []).push({ google_ad_client: "ca-pub-7059460345818162", enable_page_level_ads: true }); </script>
<!--ads-->


<meta name="google-site-verification" content="LyQ1URuEY8pIzFdu80VFHTQNJYw1aJIul6IA-K3nhG0" />

</head>
<body>

    <!--<style>-->
        
        

    <!--    html{-->
    <!--      scroll-behavior: smooth;-->
    <!--    }-->

        
    <!--</style>-->


	<!-- HEADER -->
	<header id="header">
		<!-- NAV -->
		<div id="nav">
			<!-- Top Nav -->
			<div id="nav-top">
				<div class="container">

					<!-- logo -->
					<div class="nav-logo">
						<a href="/" width="100" height="100" class="logo"><img src="{{asset('./img/logo.png')}}" alt=""></a>
					</div>
					<!-- /logo -->

					<!-- search & aside toggle -->
					<div class="nav-btns">
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<div id="nav-search">
                            <form action="{{ route('UI.searchResult') }}" method="post">
								{{ csrf_field() }}
								<input class="input" name="search"  placeholder="Enter your search...">
							</form>
							<button class="nav-close search-close">
								<span></span>
							</button>
						</div>
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			
			
            <!-- Main Nav -->
            <div id="nav-bottom">
                <div class="container">
                    <!-- nav -->
                    <ul class="nav-menu">
                        <li><a href="/">Home</a></li>
                    	@foreach ($categories as $category)
							<li><a href="{{route('UI.category', ['id' => $category->id])}}">{{$category->name}}</a></li>
						@endforeach
                        <li><a href="#About">About US</a></li>
                        <li><a href="#Contacts">Contacts</a></li>
                    </ul>
                    <!-- /nav -->
                </div>
            </div>
            <!-- /Main Nav -->
			
			
			
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->

