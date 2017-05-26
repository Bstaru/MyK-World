@extends('layouts.master')

@section('title', 'Artist')

@section('PageLayout')
    @parent


    @section('content')

    <div class="row elart">
      <div class = "foto col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <h4 class="text-center"> {{ $artist->artistName }}</h4>
        <img src="{{ $artist->artistAvatarPath }}" class="img-responsive img-circle">
      </div>
      <div  class = "descrip col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <div class="smolbio">Profile</div>
        <ul>
          <li>Name: {{ $artist->artistFullName }}</li>
          <li>Birthday: {{ $artist->artistbirthday }}</li>
          <li>Born plaece: {{ $artist->bornPlace }}</li>
          <li>Height: {{ $artist->height }}</li>
          <li>Weight: {{ $artist->weight }}</li>
          <li>Blood type: {{ $artist->bloodType}}</li>
          <li>Agency: {{ $artist->agency }}</li>
        </ul>
      </div>
      <div  class = "follow col-lg-2 col-md-2 col-sm-12 col-xs-12">
        <ul>
          <li class="fol2">
            <form class="form-horizontal" role="form" method="POST" action="/add_to_fav">
                 {{ csrf_field() }}
                 <input type="hidden" name="idArtist" value="{{$artist->idArtist}}" />
                 <input type="hidden" name="typeArtist" value="{{$artist->typeArtist}}" />

                <button type="submit" name="submit">
                  <img src="{{asset('assets/images/icons/fav.png')}}" class = "img-responsive">
                </button> 
                
                
                </a>
            </form>
          </li>
        </ul> 
      </div>
      
      <div  class = "mas col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="smolbio">Biography</div>

        <div class = "smolbioDd">
          
          <p>{{ $artist->biography }}</p>
          
          <div class="dramas col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="smolbio">Dramas</div>
            <ul>
              <li>Missing 9 (MBC, 2017)</li>
              <li>EXO Next Door (LINE/Naver TV Cast, 2015)</li>
              <li>Welcome to Royal Villa (jTBC, 2013) cameo</li>
              <li>To the Beautiful You. (SBS, 2012) cameo</li>
              <li>Things We Do That We Know We Will Regret (KBS2, 2008)</li>
            </ul>
          </div>
          <div class="songs col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="smolbio">Songs</div>
            <ul>
              <li>{{ $artist->songs }}</li>
            </ul>
          </div>
          <div class="more col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="smolbio">More</div>
            <ul>
              <li>{{ $artist->more }}</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
    @endsection

   
@endsection 

<!--


-->
