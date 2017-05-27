@extends('layouts.master')

@section('title', 'Search')

  @section('PageLayout')
    @parent

    @section('content')

      <div class="row labus listaCont">
      
      <div class="btn-group btn-group-justified">
        <a class="btn btnsList">All</a>
        <a class="btn btnsList">Dramas</a>
        <a class="btn btnsList">Groups</a>
        <a class="btn btnsList">Artist</a>
        <a class="btn btnsList">Users</a>
      </div>
    
      <br>

      <ul class="list-group">

     
      @forelse ($Drama as $drama)
       <a href="/drama/{{$drama->idDrama}}">  
          <li  class="list-group-item">   
              
            <div class="imgBusq col-lg-4 col-md-2 col-sm-12 col-xs-12">
              <img src="{{$drama->dramaPhotoPath}}" class="img-responsive">
            </div>

            <div class="resultBusq col-lg-8 col-md-7 col-sm-12 col-xs-12">

              <h3>{{ $drama->dramaName }}</h3>
               <sub>Drama</sub>
            </div>        
          </li>
           </a>

         @empty

          <li  class="list-group-item">   
              
            <div class="imgBusq col-lg-4 col-md-2 col-sm-12 col-xs-12">
              <img src="{{img/drama1.jpg}}" class="img-responsive">
            </div>

            <div class="resultBusq col-lg-8 col-md-7 col-sm-12 col-xs-12">

              <h3>No results for</h3>
               <sub>Drama</sub>
            </div>        
          </li>
           </a>



       @endforelse

    

       @forelse ($Artist as $artist)
       <a href="/artist/{{$artist->idArtist}}">  
          <li  class="list-group-item">   
              
            <div class="imgBusq col-lg-4 col-md-2 col-sm-12 col-xs-12">
              <img src="{{$artist->artistAvatarPath}}" class="img-responsive">
            </div>
            <div class="resultBusq col-lg-8 col-md-7 col-sm-12 col-xs-12">
            
              <h3>{{ $artist->artistName }}</h3>
              <sub>Artist</sub>
            </div>        
          </li>
           </a>
            @empty

          <li  class="list-group-item">   
              
            <div class="imgBusq col-lg-4 col-md-2 col-sm-12 col-xs-12">
              <img src="{{$drama->dramaPhotoPath}}" class="img-responsive">
            </div>

            <div class="resultBusq col-lg-8 col-md-7 col-sm-12 col-xs-12">

              <h3>No results for</h3>
               <sub>Artist</sub>
            </div>        
          </li>
           </a>
       @endforelse

       @forelse ($Group as $group)
       <a href="/group/{{$group->idGroup}}">  
          <li  class="list-group-item">   
              
            <div class="imgBusq col-lg-4 col-md-2 col-sm-12 col-xs-12">
              <img src="{{$group->groupPhotoPath}}" class="img-responsive">
            </div>
            <div class="resultBusq col-lg-8 col-md-7 col-sm-12 col-xs-12">
             
              <h3>{{ $group->groupName }}</h3>
              <sub>Group</sub>
            </div>        
          </li>
           </a>
            @empty

          <li  class="list-group-item">   
              
            <div class="imgBusq col-lg-4 col-md-2 col-sm-12 col-xs-12">
              <img src="img/drama1.jpg" class="img-responsive">
            </div>

            <div class="resultBusq col-lg-8 col-md-7 col-sm-12 col-xs-12">

              <h3>No results for</h3>
               <sub> Group</sub>
            </div>        
          </li>
           </a>
       @endforelse
       @forelse ($User as $user)
       <a href="/profile/{{$user->id}}">  
          <li  class="list-group-item">   
              
            <div class="imgBusq col-lg-4 col-md-2 col-sm-12 col-xs-12">
              <img src="{{$user->userAvatarPath}}" class="img-responsive">
            </div>
            <div class="resultBusq col-lg-8 col-md-7 col-sm-12 col-xs-12">
              <h3>{{ $user->username }}</h3>
              <sub>User</sub>
            </div>        
          </li>
           </a>

            @empty

          <li  class="list-group-item">   
              
            <div class="imgBusq col-lg-4 col-md-2 col-sm-12 col-xs-12">
              <img src="img/drama1.jpg" class="img-responsive">
            </div>

            <div class="resultBusq col-lg-8 col-md-7 col-sm-12 col-xs-12">

              <h3>No results for</h3>
               <sub>User</sub>
            </div>        
          </li>
           </a>
       @endforelse
     
         
      </ul>
  </div>
   



    @endsection

   
@endsection 