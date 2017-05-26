@extends('layouts.master')

@section('title', 'Group')

  @section('PageLayout')
    @parent

    @section('content')
    <div class="row elgpo">
      <div class = "fotoG col-lg-12 col-md-12 col-sm-12 col-xs-12">   
        <img src="{{ $group->groupPhotoPath }}" class="img-responsive img-rounded">
      </div>

      <div class = "textG col-lg-offset-3 col-lg-3 col-md-offset-3 col-md-3 col-sm-12 col-xs-12">    
        <h4 class=""> {{ $group->groupName }} </h4>  
      </div>

      <div class = "followgpo col-lg-3 col-md-3 col-sm-12 col-xs-12" >
        <div style="height: 10px;"></div>
         <form class="form-horizontal" role="form" method="POST" action="/add_Favorite">
             {{ csrf_field() }}
             <input type="hidden" name="id" value="{{$group->idGroup}}">
             <button type="submit" value="Submit">
               <a href="#" class="folg">
                  <img src="{{asset('assets/images/icons/fav.png')}}" class = "img-responsive">Favorite
                </a> 
              </button>
              
          </form>
        <br>  <br>
       
      </div> 

      <div class = "infogpo col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="smolbio">Info</div>
        <div class = "smolbioDd">
          <ul>
            <li>Name: {{ $group->groupName }}</li>
            <li>Type: {{ $group->groupType }}</li>
            <li>Members: {{ $group->memberNumber }}</li>
            <li>Agency:{{ $group->agency }}</li>
            <li>Date of Debut: {{ $group->dateOfdebut }}</li>
            <li>Fandom: {{ $group->fansite }}</li>
            <li>Astrological sign: Sagitario</li>
            <li>Chinese Astrological sign: Monkey</li>
            <li>Agency: SM Entertainment</li>
          </ul>
        </div>
      </div>

      <div class= "infogpo col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="smolbio">Members</div>
          <ul>
              <li>Xiumin</li>
              <li>Suho</li>
              <li>Lay</li>
              <li>Baekhyun</li>
              <li>Chen</li>
              <li>Chanyeol</li>
              <li>D.O</li>
              <li>Kai</li>
              <li>Sehun</li>
          </ul>
      </div>

      <div class= "infogpo col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="smolbio">Songs</div>
            <ul>
              <li>{{ $group->song1 }}</li>
              <li>{{ $group->song2 }}</li>
              <li>{{ $group->song3 }}</li>
              
          </ul>
      </div>
    </div>
    @endsection

   
@endsection 

<!--


-->
