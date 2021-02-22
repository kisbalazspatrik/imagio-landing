<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Imagio - Creative Studio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>

    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <script>
        function post()
        {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;
            var sub = document.getElementById("sub").value;

            if(name && email && message && sub)
            {
            $.ajax
            ({
              type: 'post',
              url: 'email.php',
              global: true,
              data:
              {
                 user_name:name,
                 user_email:email,
                 user_message:message,
                 user_sub:sub
              },
              success: function (response)
              {


              }
            });
            }

            return false;

        }
        $(document).ready(function(){
            $(document).ajaxStart(function(){
              console.log("MailAlert display change lefutott!")
              $("#mailalert").removeClass("hidden");

            });
        });
    </script>

    <script>
          window.fbAsyncInit = function() {
              FB.init({
                  xfbml            : true,
                  version          : 'v5.0'
              });
          };

          (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/hu_HU/sdk/xfbml.customerchat.js';
              fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));
    </script>

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div id="fb-root"></div>
  <div class="fb-customerchat"
       attribution=setup_tool
       page_id="104596514336587"
       theme_color="#ff9c39"
       logged_in_greeting="Szia, miben segíthetünk?"
       logged_out_greeting="Szia, miben segíthetünk?">
  </div>
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"><img src="images/logo-nav.png" width="184" height="86"></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="oi oi-menu"></span>
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#services-section" class="nav-link"><span>Szolgáltatások</span></a></li>
            <li class="nav-item"><a href="#about-section" class="nav-link"><span>Rólunk</span></a></li>
            <li class="nav-item"><a href="#team-section" class="nav-link"><span>Csapatunk</span></a></li>
            <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Kapcsolat</span></a></li>
            <li class="nav-item"><a href="/downloads/" class="nav-link"><span>Letöltések</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section id="home-section" class="hero">
		  <div class="home-slider js-fullheight owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/imagio-2-compressor.jpg);">
	          		<h3 class="vr" style="background-image: url(images/divider.jpg);">DESIGN</h3>
	          	</div>
		          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">DESIGN</span>
			            <h1 class="mb-4 mt-3">Korszerű grafikai <span>dizájnok</span></h1>
			            <p>Csapatunk törekszik a vizuális trendeket követve kielégíteni az ügyfél kívánságait.</p>
			            
			            <p><a href="#services-section" class="btn btn-primary px-5 py-3 mt-3">Szolgáltatások</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/imagio-5-compressor.jpg);">
	          		<h3 class="vr" style="background-image: url(images/divider.jpg);">FOTÓ & VIDEÓ</h3>
	          	</div>
		          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">FOTÓ & VIDEÓ</span>
			            <h1 class="mb-4 mt-3">Látványos, személyre szabott <span>videók</span> és <span>fotók</span></h1>
			            <p>Csapatunk törekszik a vizuális trendeket követve kielégíteni az ügyfél kívánságait.</p>
			            
			            <p><a href="#services-section" class="btn btn-primary px-5 py-3 mt-3">Szolgáltatások</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>
		
		<section class="ftco-section ftco-services ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row no-gutters services-section">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="fas fa-award"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Minőség</h3>
                <p>Munkáink elvégzése során fontosnak tartjuk, hogy az ügyfél kérését magas precizitással és kellő odafigyeléssel teljesítsük.</p>
                <!-- <p><a href="#" class="btn btn-primary">Read more</a></p> -->
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2 text-center d-block">
              <div class="icon"><span class="far fa-clock"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Rugalmasság</h3>
                <p>Fontos számunkra az ügyfelekkel való együttműködés, hogy a közös munka végeredménye mindenki tetszését elnyerje.</p>
                <!-- <p><a href="#" class="btn btn-primary">Read more</a></p> -->
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="fas fa-percent"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Kedvező árak</h3>
                <p>Csapatunk számára fontos, hogy az ügyfél olyan árakon jusson hozzá kívánságaihoz, ami kedvező mindkét fél számára.</p>
                <!-- <p><a href="#" class="btn btn-primary">Read more</a></p> -->
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt ftco-program bg-light" id="services-section">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate py-5 nav-link-wrap js-fullheight">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link px-4 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><span class="mr-3 fas fa-camera"></span> Fotózás</a>

              <a class="nav-link px-4" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"><span class="mr-3 fas fa-video"></span>  Videóklip készítés</a>

              <a class="nav-link px-4" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false"><span class="mr-3 fas fa-ad"></span> Reklámfilm készítés</a>

              <a class="nav-link px-4" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false"><span class="mr-3 fas fa-pencil-ruler"></span> Arculattervezés</a>

              <a class="nav-link px-4" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false"><span class="mr-3 fas fa-book-open"></span>Kiadványszerkesztés</a>

              <a class="nav-link px-4" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false"><span class="mr-3 fas fa-hashtag"></span> Közösségi média elemek</a>

              <a class="nav-link px-4" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false"><span class="mr-3 far fa-chart-bar"></span> Reklámanyag</a>

            	<a class="nav-link px-4" id="v-pills-08-tab" data-toggle="pill" href="#v-pills-08" role="tab" aria-controls="v-pills-08" aria-selected="false"><span class="mr-3 fas fa-chart-pie"></span> Termékbemutató</a>

              <a class="nav-link px-4" id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9" role="tab" aria-controls="v-pills-9" aria-selected="false" style="background: #FF8F20"><span class="mr-3 fas fa-plus"></span> Egyedi kérés</a>
            </div>
          </div>
          <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center js-fullheight">
            
            <div class="tab-content pl-md-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active py-0" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                <span class="icon mb-3 d-block fas fa-camera"></span>
                <h2 class="mb-4">Fotózás</h2>
                <p>A profi fotó elengedhetetlen minden területen.</p>
                <p>A minőségi képek elengedhetetlenek főleg egy üzlet életében, de elég csak egy autó, lakáshirdetésre gondolni. 
                Alacsony költségvetés mellett nyújtunk magas szakmai színvonalú végterméket. Képeink 4K felbontásban készülnek, rövid átfutási idővel.</p>
                <ul>
                <li>Esküvőfotózás</li> 
                <li>Eseményfotózás</li>
                <li>Portré és Modell fotózás</li>
                <li>Családi fotózás</li>
                <li>Tárgy-, Reklám-, és ételfotózás</li>
                </ul><br>
                <p><a href="#contact-section" class="btn btn-primary px-4 py-3">Üzenet</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                <span class="icon mb-3 d-block fas fa-video"></span>
                <h2 class="mb-4">Videóklip készítés</h2>
                <p>Amennyiben videóst keresel, tökéletes helyen jársz.</p>
                <p>A forgatástól a vágásig állunk rendelkezésedre. A végeredményt pedig 4K felbontásban is láthatod! Törekszünk a precizitásra,
                minőségre és a lehető leggördülékenyebb együttműködésre.</p>
                <p><a href="#contact-section" class="btn btn-primary px-4 py-3">Üzenet</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                <span class="icon mb-3 d-block fas fa-ad"></span>
                <h2 class="mb-4">Reklámfilm készítés</h2>
                <p>Szeretnéd üzleted/vállalkozásod forgalmát fellendíteni egy modern reklámfilmmel? Lépj velünk kapcsolatba!</p>
                <p>Mindenkinek van jó pár olyan termék/szolgáltatás/hely, amit egy reklámfilmből ismer. Nagyon sokat dobhat a forgalmon egy jó minőségű reklámfilm. </p>
                <p><a href="#contact-section" class="btn btn-primary px-4 py-3">Üzenet</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                <span class="icon mb-3 d-block fas fa-pencil-ruler"></span>
                <h2 class="mb-4">Arculattervezés</h2>
                <p>Szeretnél egy szép és erős arculatot? Lépj velünk kapcsolatba!</p>
                <p>Brand építés során minden apróságot meg kell ragadni, amivel az ügyfél tetszését elnyerjük! Az adott céghez hozzáillő arculattal sosem lőhetünk mellé, ugyanis ezt látják a meglévő és a jövendőbeli ügyfeleink is. Készíttesd el velünk egyedi arculatodat!</p>
                <ul>
                <li>Névjegykártya</li> 
                <li>Mappa</li>
                <li>Meghívó</li>
                <li>Egyedi megjelenésű levélpapír és boríték / E-Mail aláírás</li>
                <li>Logó/embléma</li>
                </ul>  
                <p><a href="#contact-section" class="btn btn-primary px-4 py-3">Üzenet</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                <span class="icon mb-3 d-block fas fa-book-open"></span>
                <h2 class="mb-4">Kiadványszerkesztés</h2>
                <p>Szeretnéd hogy már akkor jó érzés töltsön el amikor csak rápillantasz saját kiadványodra? Lépj velünk kapcsolatba!</p>
                <p>Kiadványoknál általában a tartalom a legfontosabb. Azonban egyértelműen a siker kulcsa, ha az adott kiadvány olyan grafikai felületen van amin az olvasás még kellemesebb érzéssel tölt el minket. Készíttesd el velünk kiadványod megjelenését!</p>
                <p><a href="#contact-section" class="btn btn-primary px-4 py-3">Üzenet</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
                <span class="icon mb-3 d-block fas fa-hashtag"></span>
                <h2 class="mb-4">Közösségi média elemek</h2>
                <p>Szeretnél kitűnni az interneten egy egyedi arculattal? Lépj velünk kapcsolatba! </p>
                <p>Böngészés közben rengeteg olyan közösségi felülettel találkozunk, amik pillanatok alatt elvonják figyelmünket és rákattintunk. Legyen ez a te felületed! Készíttesd el velünk közösségi média arculatodat!</p>
                <p><a href="#contact-section" class="btn btn-primary px-4 py-3">Üzenet</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
                <span class="icon mb-3 d-block far fa-chart-bar"></span>
                <h2 class="mb-4">Reklámanyag</h2>
                <p>Szeretnéd üzleted/vállalkozásod forgalmát fellendíteni egy vonzó reklámanyaggal? Lépj velünk kapcsolatba!</p>
                <p>Sokan kudarcként élik meg amikor vállalkozásuk nem úgy teljesít ahogyan ők azt elképzelték volna. Azonban egy megfelelő és figyelemfelkeltő reklámanyaggal, bármikor fellendíthetjük a forgalmat. Készíttesd el velünk saját szóróanyagodat, reklámanyagodat!</p>
                <p><a href="#contact-section" class="btn btn-primary px-4 py-3">Üzenet</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-08" role="tabpanel" aria-labelledby="v-pills-08-tab">
                <span class="icon mb-3 d-block fas fa-chart-pie"></span>
                <h2 class="mb-4">Termékbemutató</h2>
                <p>Van egy fizikai vagy virtuális terméked amihez társítanál egy tekintetvonzó megjelenést? Lépj velünk kapcsolatba!</p>
                <p>Az emberek vásárlás során nagy hangsúlyt fektetnek az adott termék megjelenésére, reklámminőségére. Készíttesd el velünk a saját terméked egyedi bemutatóját.</p>
                <p><a href="#contact-section" class="btn btn-primary px-4 py-3">Üzenet</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab">
                <span class="icon mb-3 d-block fas fa-plus"></span>
                <h2 class="mb-4">Egyedi együttműködés</h2>
                <p>Nem találod a fenti szolgáltatásaink közül azt amit keresel? Lépj velünk kapcsolatba!</p>
                <p>Amennyiben olyan ötletedet szeretnéd megvalósíttatni amihez nem találtál szolgáltatást menüpontjainkban, lépj velünk kapcsolatba és valósítsd meg csapatunk segítségével! (Például: meglévő fotóanyag, videóanyag, grafikai anyagok utómunkálatai és, vagy munkálatainak befejezése.) </p>
                <p><a href="#contact-section" class="btn btn-primary px-4 py-3">Üzenet</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/imagio-3-compressor.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate">
			          	<span class="subheading">Pár szó rólunk</span>
			            <!--h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">éve<span class="number" data-number="2019">0</span> ve</h2-->
                  <h2 class="mb-4" style="font-size: 34px;">Ismerj meg kicsit jobban</h2>
			            <p>Az Imagio-val 2019 végén kezdtünk el foglalkozni, azelött a baráti társaság szétszórva vállalta a kreatív munkákat országszerte. Fő szempontunk a minőségi szolgáltatás nyújtása.</p>
			            <p>Munkáink során törekszünk a pontosságra és próbáljunk mindig felvenni a lépést a változó trendekkel.</p>
			            <p>Hiszünk abban, hogy egy jól felépített arculat erős támpontot ad egy vállalkozás, cég életében</p>
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light" id="team-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-6 heading-section text-center ftco-animate">
          	<span class="subheading">TEAM</span>
            <h2 class="mb-4">Csapatunk</h2>
          </div>
        </div>
        <div class="row">
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/team-3.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Váradi Norbert</h3>
									<span class="position mb-4">Fotó, videó</span>
									<div class="faded">
										<ul class="ftco-social text-center">
			                <!--<li class="ftco-animate"><a href="#" target="_blank"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#" target="_blank"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#" target="_blank"><span class="icon-google-plus"></span></a></li>-->
			                <li class="ftco-animate"><a href="https://www.instagram.com/_vnorbi/" target="_blank"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/team-2.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Szloboda Márton</h3>
									<span class="position mb-4">Grafikus</span>
									<div class="faded">
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="https://www.facebook.com/marton.szloboda.90" target="_blank"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="https://www.instagram.com/marciszloboda/" target="_blank"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/team-1.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Kisbalazs Patrik</h3>
									<span class="position mb-4">Grafikus</span>
									<div class="faded">
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="//instagram.com/kisbalazspatrik" target="_blank"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">KAPCSOLAT</span>
            <h2 class="mb-4">Kapcsolatfelvétel</h2>
            <p>Szeretnél velünk együttműködni? Esetleg felkeltettük érdeklődésed? Keress minket bizalommal az alábbi űrlap segítségével</p>
          </div>
        </div>
        <div class="mailalert hidden" id="mailalert">
          <strong>Köszi a levelet! Hamarosan keresni fogunk emailen. Kérlek ellenőrizd a visszaigazoló emailt, hogy tuti megkaptuk-e (és nézd meg a spam mappát is).</strong>
        </div>
        <div class="row block-9"> 
          <div class="col-md-7 order-md-last d-flex">
            <form action="" method="post" onsubmit="return post();" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Név" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email cím" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="sub" id="sub" placeholder="Miről lenne szó röviden?">
              </div>
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="és bővebben?"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Küldés" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-5 d-flex">
          	<div class="row d-flex contact-info mb-5">
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-map-signs"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Cím</h3>
				            <p>2500, Esztergom</p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-paper-plane"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Email</h3>
				            <p><a href="mailto:hello@imagio.hu">hello@imagio.hu</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-globe"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Weboldal</h3>
				            <p><a href="#about">imagio.hu</a></p>
			            </div>
			          </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-gallery ftco-section bg-light">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Galéria</h3>
            <h2 class="mb-1">Csekkold le pár legutóbbi fotónkat</h2>
          </div>
        </div>
    		<div class="row">
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-1-compressor.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1-thumb-compressor.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-2-compressor.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2-thumb-compressor.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-3-compressor.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3-thumb-compressor.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery-4-compressor.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4-compressor.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>
    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Bővebben <span><a href="#about-section">[ Rólunk ]</a></span></h2>
              <p>Bármi kérdésed merülne fel, keress minket bátran az alábbi elérhetőségeken</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="//www.facebook.com/imagiohu/" target="_b"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="//www.instagram.com/imagio.hu/" target="_b"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <!--div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Cocahes</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Schedule</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Gym Fitness</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Crossfit</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Yoa</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Aerobics</a></li>
              </ul>
            </div>
          </div-->
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2"></h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker" style="color: #E51635"></span><span class="text">2500, Esztergom</span></li>
	                <!--li><a href="#"><span class="icon icon-phone"></span><span class="text">+36 nem</span></a></li-->
	                <li><a href="mailto:hello@imagio.hu"><span class="icon icon-envelope" style="color: #00AEE7"></span><span class="text">hello@imagio.hu</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy; <script>document.write(new Date().getFullYear());</script> Minden jog fenntartva</p> <p class="credit">Made with <i class="icon-heart color-danger" style="color: #E51635" aria-hidden="true"></i> and <i class="fas fa-coffee" style="color: #D2B48C"></i> by <a href="#contact-section">pitpat</a> & <a>Colorlib</a>
          </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader >
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="https://kit.fontawesome.com/01c467a789.js" crossorigin="anonymous"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>