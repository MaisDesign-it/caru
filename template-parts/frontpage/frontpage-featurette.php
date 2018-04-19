<hr class="featurette-divider">
<div class="row featurette">
	<div class="col-md-7" id="birraqualita">
		<h2 class="featurette-heading">Solo birra di qualità. <span class="text-muted">Ogni settimana birre diverse.</span></h2>
		<p class="lead">Abbiamo 10 vie alla spina di cui 7 a rotazione. Dalle pils, alle Imperial Stout,passando per IPA e Sour troverai le migliori produzioni brassicole sulle quali riusciamo a mettere le mani.</p>
		<a href="/cosa-beviamo-oggi/" title="Consulta la taplist" target="_blank">Cosa abbiamo alla spina oggi? (Work in Progress)</a>
	</div>
	<div class="col-md-5">
		<img class="lazyload featurette-image img-fluid mx-auto"
		     src="<?php echo get_stylesheet_directory_uri(); ?>/img/bn/taplist.jpg"
		     data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/taplist.jpg"
		     height="243" width="423"
		     alt="Solo birra di qualit&agrave; ad Acireale"/>
	</div>
</div>
<hr class="featurette-divider">
<div class="row featurette">
	<div class="col-md-7 order-md-2" id="territorio">
		<h2 class="featurette-heading">Hai TANTA fame? <span class="text-muted">Prova i nostri panini giganti.</span></h2>
		<p class="lead">Alcuni sono più classici, altri invece più azzardati, di sicuro ogni panino del nostro menù ha una storia da raccontare, a partire dal nome scelto.</p>
	</div>
	<div class="col-md-5 order-md-1">
		<img class="lazyload featurette-image img-fluid mx-auto"
		     src="<?php echo get_stylesheet_directory_uri(); ?>/img/bn/mortazza_post.jpg"
		     data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/innuendo.png"
		     alt="Panini giganteschi acireale"
		     height="432" width="432"/>
	</div>
</div>
<hr class="featurette-divider">
<div class="row featurette">
	<div class="col-md-7" id="corsi">
		<h2 class="featurette-heading">Corsi ed incontri. <span class="text-muted">Birrai in cattedra.</span></h2>
		<p class="lead">A cadenza quasi mensile, cerchiamo di organizzare corsi o incontri con i birrai che producono le birre che quotidianamente vi serviamo. Scopri con noi come realizzano quello che vi finisce nel bicchiere.</p>
	</div>
	<div class="col-md-5">
		<img class="lazyload featurette-image img-fluid mx-auto"
		     src="<?php echo get_stylesheet_directory_uri(); ?>/img/bn/lariano.jpg"
		     data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/lariano.jpg"
		     height="242" width="430"
		     alt="Corsi ed incontri sulla birra artigianale"/>
	</div>
</div>
<hr class="featurette-divider">
<div class="row featurette">
	<div class="col-md-7" id="corsi">
		<h2 class="featurette-heading">Dove siamo? <span class="text-muted">Vieni a trovarci.</span></h2>
		<p class="lead">Ci trovi ad Acireale, in via Monsignor Genuardi 28. <a id="wamsgetimue" target="_blank" href="https://api.whatsapp.com/send?phone=390958363554" title="Prenota dal Martedì alla Domenica dalle 18.30 fino a chiusura.Mandaci un messaggio WhatsApp e prenota il tuo tavolo">Ricordati di prenotare (anche via WhatsApp 095/8363554)</a></p>
	</div>
	<div id="map"></div>
	<script>
        function initMap() {
            var uluru = {lat: 37.613297, lng: 15.166713};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
	</script>
</div>
<hr class="featurette-divider">