@extends('layouts.app')
<style>
    .mt-2 {
        margin-top: 2rem !important;
    }
</style>
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
    <div class="row justify-content-center">
        <div id="content" class="col-sm-8">
            
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="contact-form">
                <center><h1 class="page-title">Login</h1></center>

                <div class="col-sm-12"> 
                     <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-2 mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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