@extends('layouts.master')

@section('title', 'Profile')

  @section('PageLayout')
    @parent

    @section('content')

   
    	<div class="row corcho">

		<div class="PP col-lg-offset-1 col-md-offset-1 col-lg-2 col-md-2 col-sm-12 col-xs-12">
			<div class = "PolaroidProfile">
				<img src="{{ $user->userAvatarPath }}">
			</div>
			<div class=" = NameProfile">
				<h4>{{ $user->username }} </h4>
			</div>
		</div>

		<div class="note col-lg-8 col-md-8 col-sm-12 col-xs-12">
			<h5  class = "name col-lg-12 col-md-12 col-sm-12 col-xs-12" >Name: {{ $user->name }} {{ $user->lastname }}</h5>
			<h5  class = "bd col-lg-12 col-md-12 col-sm-12 col-xs-12" >Birthday: {{ $user->birthday }}</h5>
			<p class = "dsc col-lg-12 col-md-12 col-sm-12 col-xs-12" >Description: {{ isset( $user->userDescription) ?  $user->userDescription : "There's no description yet" }}</p>
		</div>

		<div class = "likes text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <img src="{{asset('assets/images/Backgrounds/my-favs.png')}}" class="img-responsive text-center">
		</div>

		<div class = "like_GSDA col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<div class="like_G col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<div class = "cinta"><img src="{{asset('assets/images/Backgrounds/cinta.png')}}" ></div>
				<div class = "PhotoG">
					<img src="{{ ! empty($user->artist->artistAvatarPath)?  $user->artist->artistAvatarPath : '' }}" class="img-responsive">
				</div>
				<div class=" = NameG">
					<h4>
					@if( ! empty($user->artist->artistName))
					{{$user->artist->artistName}}
					@else
					No fav artist
					@endif	
					</h4>
				</div>
			</div>
			
			<div class="like_S col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class = "cinta"><img src="{{asset('assets/images/Backgrounds/cinta.png')}}" ></div>

        <a href="artist.html"  class="artist-like">
  				<div class = "PhotoS">
  					<img src="{{ ! empty($user->dramaArtist->artistAvatarPath)?  $user->dramaArtist->artistAvatarPath : '' }}" class="img-responsive">
  				</div>
  				<div class=" = NameS">
  					<h4> 
  					@if( ! empty($user->dramaArtist->artistName))
					{{$user->dramaArtist->artistName}}
					@else
					No fav drama artist
					@endif	
  					</h4>
  				</div>
        </a>
        
			</div>

			<div class="like_D col-lg-3 col-md-3 col-sm-12 col-xs-12">

				<div class = "cinta"><img src="{{asset('assets/images/Backgrounds/cinta.png')}}" ></div>
			
				<div class = "PhotoD">
					<img src="{{ ! empty($user->dramafav->dramaPhotoPath)?  $user->dramafav->dramaPhotoPath : '' }}" class="img-responsive">
				</div>
				<div class=" = NameD">
					<h4>
						@if( ! empty($user->dramafav->dramaName))
					{{$user->dramafav->dramaName}}
					@else
					No fav drama 
					@endif	
					</h4>
				</div>
			</div>

			<div class="like_A col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class = "cinta"><img src="{{asset('assets/images/Backgrounds/cinta.png')}}" ></div>
				<div class = "PhotoA">
					<img src="{{ ! empty($user->group->groupPhotoPath)?  $user->group->groupPhotoPath : '' }}" class="img-responsive">
				</div>
				<div class=" = NameA">
					<h4>
						@if( ! empty($user->group->groupName))
					{{$user->group->groupName}}
					@else
					No fav group
					@endif	
					</h4>
				</div>
			</div>
	
		</div>
	</div>
    @endsection

   
@endsection 