<!DOCTYPE html>
<html lang="en">
	

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="description"/>
		<meta name="keywords" content="keywords"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<link rel="shortcut icon" href="img/favicon.ico"/>
		<title>OSMI</title>
        <!-- styles-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/styles.min.css') }}"/>
		<link rel="stylesheet" href="{{ asset('css/app.css') }}"/>

		<script>
			WebFontConfig = {

				google: {

					families: ['Permanent+Marker:400'],

				}

			}

			function font() {

				var wf = document.createElement('script')

				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
				wf.type = 'text/javascript'
				wf.async = 'true'

				var s = document.getElementsByTagName('script')[0]

				s.parentNode.insertBefore(wf, s)

			}

			font()
		</script>
		
	</head>
	<body>
		<div class="page-wrapper">
            @include('partials.aside')
            
            @include('partials.header')

            <main class="main">
                @yield('content')
                
                
                @include('partials.nextfooter')
                
            </main>

            @include('partials.footer')
		</div>
		<!-- libs-->
		
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/libs.min.js') }}"></script>
        
		<!-- scripts-->
		<script src="{{ asset('js/common.min.js') }}"></script>
		
	</body>

</html>