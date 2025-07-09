@extends('layouts.app')
@section('content')

<div class="wrap-breadcrumb parallax-breadcrumb">
	<div class="container">
		
	</div>
</div> 
 
<div id="information-contact" class="container">
	<ul class="breadcrumb">
		<li><a href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=common/home"><i
					class="fa fa-home"></i></a></li>
		<li><a href="https://codezeel.com/opencart/OPC02/OPC020044/index.php?route=information/contact">Contact Us</a>
		</li>
	</ul>
	<div class="row">
		<div id="content" class="col-sm-12">
			
			@if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif
 
			<div class="contact-form">
				<center><h1 class="page-title">Contact</h1></center>
				<div class="contact-form left">

					<div class="row">
						<div class="col-sm-6">
							<div class="address-detail1">
								<strong>Adresse : </strong>
								<address>
								SD.lotissement -Agharass
									<br>
								Cité bouargane Agadir-Maroc
								</address>
							</div>

							<div class="map-btn"><a href="https://maps.google.com/maps?q=France &hl=fr-fr &t=m&z=15"
									target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> Voir sur Google
									Maps </a></div>
						</div>

						<div class="col-sm-6">
							<div class="telephone">
								<strong>Téléphone : </strong>
								<address>:+212 655 502 068</address>
							</div>

						

							<div class="time">
								<strong>Horaires d'ouverture :</strong>
								9h00 à 18h00 (lundi à vendredi)
								<br />
							</div>
						</div>

					</div>
					<div class="comments col-sm-12">
						<strong>Commentaires : </strong>
						Transformez votre maison en un espace de vie unique !
Chez M.A_aménagement, nous mettons notre passion et notre savoir-faire au service de vos envies. Que ce soit pour une cuisine moderne, un dressing fonctionnel ou un salon chaleureux, nous réalisons des aménagements sur mesure qui allient esthétisme, confort et qualité.
 Faites de chaque pièce un espace qui vous ressemble !
					</div>
				</div>

				<div class="contact-form right">
					
					<form action="{{ route('contact.save') }}"
						method="post" enctype="multipart/form-data" class="form-horizontal">
						@csrf
						<fieldset>
							<h3>Formulaire de contact</h3>
							<div class="form-group required">
								<label class="col-sm-3 control-label" for="input-name">Votre nom</label>
								<div class="col-sm-9">
									<input type="text" name="name" value="{{ old('name') }}" id="input-name" class="form-control"  />
									@error('name')
										<div class="text-danger">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-3 control-label" for="input-email">Adresse e-mail</label>
								<div class="col-sm-9">
									<input type="text" name="email" value="{{ old('email') }}" id="input-email" class="form-control" />
									@error('email')
										<div class="text-danger">{{ $message }}</div>
									@enderror
								</div>
							</div>
								<div class="form-group required">
								<label class="col-sm-3 control-label" for="input-email">Téléphone</label>
								<div class="col-sm-9">
									<input type="text" name="tel" value="{{ old('tel') }}" id="input-tel" class="form-control" />
									@error('tel')
										<div class="text-danger">{{ $message }}</div>
									@enderror
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-3 control-label" for="input-enquiry">Votre message</label>
								<div class="col-sm-9">
									<textarea name="message" rows="10" id="input-enquiry" 
										class="form-control">
										{{ old('message') }}
									</textarea>
									@error('message')
										<div class="text-danger">{{ $message }}</div>
									@enderror
								</div>
							</div>

						</fieldset>

						<div class="buttons">
							<div class="pull-right">
								<input class="btn btn-primary" type="submit" value="Envoyer" />
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="map" id="google_map" style="width:100%; height: 400px;"></div>

		</div>
	</div>
</div>
@endsection
@section('scripts')
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOgKBG0SbQowaKmm0GqdJPYsuuDlamDxM&callback=init_map"
    async defer></script>
	<script type='text/javascript'>
		function init_map() {
			var LatLng = { lat: 46.227638, lng: 2.213749 };
			var map = new google.maps.Map(document.getElementById('google_map'), {
				center: LatLng,
				scrollwheel: false,
				zoom: 10
			});
			var marker = new google.maps.Marker({
				position: LatLng,
				map: map
			});
			infowindow = new google.maps.InfoWindow({
				content: '<strong>Cactuplan - Plant Store</strong>'
			});
			google.maps.event.addListener(marker, 'click', function () {
				infowindow.open(map, marker);
			});
			infowindow.open(map, marker);
		}
	</script>
@endsection