@extends('layouts.master')

@section('title', 'Group')

  @section('PageLayout')
    @parent

    @section('content')
    <div class="row elgpo">
      <div class = "fotoG col-lg-12 col-md-12 col-sm-12 col-xs-12">   
        <img src="{{asset('assets/images/icons/add.png')}}" class="img-responsive img-rounded">
      </div>

      <div class = "textG col-lg-offset-3 col-lg-3 col-md-offset-3 col-md-3 col-sm-12 col-xs-12">    
        <h4 class="">  {{ $drama->dramaName }}</h4>  
      </div>

      <div class = "followgpo col-lg-3 col-md-3 col-sm-12 col-xs-12" >
        <div style="height: 10px;"></div>
        <span>
         <form class="form-horizontal" role="form" method="POST" action="/add_to_list">
             {{ csrf_field() }}
             <input type="hidden" name="idDrama" value="{{ $drama->idDrama }}">
             <button type="submit" value="Submit">
              
                  <img src="{{asset('assets/images/icons/add.png')}}" class = "img-responsive">
               
              </button>
              
          </form>
          <form class="form-horizontal" role="form" method="POST" action="/add_to_fav_drama">
             {{ csrf_field() }}
             <input type="hidden" name="idDrama" value="{{ $drama->idDrama }}">
             <button type="submit" value="Submit">
              
                  <img src="{{asset('assets/images/icons/fav.png')}}" class = "img-responsive">
               
              </button>
              
          </form>
          </span>
        <br>  <br>
       
      </div> 

      <div class = "infogpo col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="smolbio">Info</div>
        <div class = "smolbioDd">
          <ul>
            <li>Name: {{ $drama->dramaName }}</li>
            <li>Emission year: {{ $drama->emissionYear }} </li>
            <li>Episodes: {{ $drama->groupName }}</li>
            <li>Genre: {{ $drama->genre }}</li>
            
           
            
          </ul>
        </div>
      </div>

      <div class= "infogpo col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="smolbio">Description</div>
          <ul>
             {{ $drama->description }}
          </ul>
      </div>

      <div class= "infogpo col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="smolbio">Rating</div>
            <ul>
              <li>Rating: <h1>{{ $drama->rating }}</h1></li>
              
              
          </ul>
      </div>
    </div>

    <div class="row">
      <h1>Write a review</h1><br>
      <form class="form-horizontal" role="form" method="POST" action="/create_resenia">
             {{ csrf_field() }}
             <textarea rows="10" class="form-control edit_resenia" name="reseniaTxt">
    
            </textarea>
             <input type="hidden" name="idDrama" value="{{ $drama->idDrama }}">
             <button type="submit" class="btn"> Publish</button>
              
        </form>
    </div>
    @endsection

   
@endsection 

<!--


-->
