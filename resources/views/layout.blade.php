<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K7JWZLK');</script>
<!-- End Google Tag Manager -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Ukraine Bus</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="/css/front.css">
<style>
.route-item {
	margin-top: 25px;
	margin-bottom: 0;
}
</style>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K7JWZLK"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<div class="first-line">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-3 col-lg-3 col-md-3">
						<p><i class="far fa-envelope"></i> ukrainebus.info@gmail.com</p>
					</div>
					<div class="col-xl-5 col-lg-5 col-md-5">
						<p><i class="fas fa-phone"></i> (0950) 700 112 &nbsp; </p>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-2 ml-auto">
						<div id="google_translate_element"></div><script type="text/javascript">
                            function googleTranslateElementInit() {
                              new google.translate.TranslateElement({pageLanguage: 'uk', includedLanguages: 'en,pl,uk', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                          }
                      </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                        <!-- <a href="" class="active">Ru</a>
                        <a href="">En</a>
                        <a href="">Pl</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-line">
        	<div class="container">
        		<nav class="navbar navbar-expand-xl navbar-expand-lg navbar-expand-md navbar-light">
        			<a class="navbar-brand" href="/"><img src="/img/logo.jpg" alt=""></a>
        			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        				<span class="navbar-toggler-icon"></span>
        			</button>

        			<div class="collapse navbar-collapse" id="navbarSupportedContent">
        				<ul class="navbar-nav col-xl- col-lg-6 col-md-6 ml-auto ">
        					<li class="nav-item active">
        						<a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
        					</li>
        					<li class="nav-item">
        						<a class="nav-link" href="/pronas">О нас</a>
        					</li>
        					<li class="nav-item">
<<<<<<< HEAD
        						<a class="nav-link" href="/napryami">Направления</a>
=======
        						<a class="nav-link" href="{{route('trip.all')}}">Направления</a>
>>>>>>> e814375bb1a467b40bcfd38ed9ce9830254c2210
        					</li>
        					<li class="nav-item">
        						<a class="nav-link" href="/poslugi">Услуги</a>
        					</li>
        					<li class="nav-item">
        						<a class="nav-link" href="/kontakti">Контакты</a>
        					</li>
        				</ul>
        			</div>
        		</nav>
        	</div>
        </div>
        <main>
        @yield('content')
    </main>
        <footer>
        	<div class="container">
        		<div class="row">
        			<div class="col-xl-3 col-lg-3 col-md-3">
        				<img src="/img/logo-footer.png" alt="">
        				<p class="footer-about"><b>UKRAINE.BUS - </b>компания, которая занимается международными перевозками и предоставляет в аренду различные виды автобусов.</p>
        			</div>
        			<div class="col-xl-3 col-lg-3 col-md-3">
        				<ul>
        					<li>Информация</li>
        					<li>О нас</li>
        					<li>Направления</li>
        					<li>Услуги</li>
        				</ul>
        			</div>
        			<div class="col-xl-3 col-lg-3 col-md-3">
        				<ul>
        					<li>Билеты</li>
        					<li>Покупка билета</li>
        					<li>Бронированние билета</li>
        				</ul>
        			</div>
        			<div class="col-xl-3 col-lg-3 col-md-3">
        				<ul>
        					<li>Контакты</li>
        					<li>(0950)700 112</li>
        					<li>(0542)700 112</li>
        					<li>(0967)700 112</li>
        					<li>(+48605) 180 180</li>
        					<li>ukrainebus.info@gmail.com</li>
        					<li>ул.Троицкая, 1, г.Сумы</li>
        				</ul>
        			</div>

        		</div>
        	</div>
        </footer>

			</div>
		</div>
	</footer>
		<script src="{{mix('js/app.js')}}" ></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.js"></script>
        <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqJMiDrWYoX8YhuM-N2GKCiOORfITLkTM&callback=initMap"></script>-->
        <script src="/js/front.js"></script>
    </body>
    </html>