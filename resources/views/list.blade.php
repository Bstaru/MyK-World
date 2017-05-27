@extends('layouts.master')

@section('title', 'List')

  @section('PageLayout')
    @parent

    @section('content')

    @php
    	$i = 0;
    @endphp

    <div class="row">

      <div id="myModal" class="modal fade" role="dialog">
	    <div class="modal-dialog">

	      <!-- Modal content-->
	      <form method="POST" action="update_drama_status"  id="update_drama_status" name="update_drama_status">
	        	 {{ csrf_field() }}  
	      <div class="modal-content">
	        <div class="modal-header mdlHead">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title ">Edit status Drama</h4>
	        </div>

	        <div class="modal-body">
	        
	        	 <p>Change status of drama.</p>
	          <div class="form-group">
	            <label for="sel1">Select status:</label>
	            <select class="form-control" id="selStatus" name="dramaStatus">
	              <option value="1">Currently Watching</option>
	              <option value="2">Completed</option>
	              <option value="3">On Hold</option>
	              <option value="4">Dropped</option>
	              <option value="5">Plan to Watch</option>
	            </select>
	          </div> 
	        
	          

	        </div>

	        <div class="modal-footer">
	        	<input type="hidden" name="idSelectedDrama" id="idDramaModal" value=""/>
	        	

	          <button type="submit" " class="btn btnMdlClose" data-dismiss="modal" form="update_drama_status">Close</button>
	          <input type="submit" name="OkEdit" class="btn btnMdlClose" value="Save" class="OkEdit">
	           
	        </div>
	        </form>
	       
	      </div>

	    </div>
	  </div>
  	

  	<div class="row listaCont">
      
      <div class="btn-group btn-group-justified">
        <a class="btn btnsList">All Dramas</a>
        <a class="btn btnsList">Currently Watching</a>
        <a class="btn btnsList">Completed</a>
        <a class="btn btnsList">On Hold</a>
        <a class="btn btnsList">Dropped</a>
        <a class="btn btnsList">Plan to watch</a>
      </div>
    
      <br>

 		<ul class="list-group">
	     @foreach (App\User::find(Auth::user()->id)->drama as $drama)	
	     @if($i < 2)
	     	@php
	     		$i++;
	     	@endphp
	     
	      <li class="list-group-item wea" wea = "{{ $drama->idDrama }}" >  
	      <a href="/drama/{{$drama->idDrama}}"> 
	            <div class="imgDramaCont col-lg-2 col-md-2 col-sm-12 col-xs-12">
	             <img src="{{asset('assets/images/icons/planet.png')}}" class="img-responsive">
	            </div>
	            <div class="nameDramaCont col-lg-7 col-md-7 col-sm-12 col-xs-12">
	              <a href="#">{{ $drama->dramaName }}</a>
	            </div>
	            <div class="moreDramaCont col-lg-3 col-md-3 col-sm-12 col-xs-12">
	                <form name="formulario">
	                  <input type="text" name="Eps" value="{{ $drama->episodesWatched }}" class="Eps"> of <span>{{ $drama->numberOfEpisodes }}</span>             
	                  <a href="#" name="masEps" onClick="add( {{ $drama->idDrama }} );" class="btn btn-default">+</a>
	                  <a href="#" class="btn btn-default list-modal-btn" data-toggle="modal"  data-target="#myModal" 
	                  Drama="{{ $drama->idDrama }}" >
	                  Edit</a>
	                </form>
	         
	            </div>
	      
    	 		<input type="hidden" name="idSelectedDrama" value="{{ $drama->idDrama }}">
    	 		<button type="button" name="OkEdit" class="btn btnMdlClose btnDeleteDrama OkEdit" onclick="wea( {{ $drama->idDrama }} );" > Delete </button>
	        	</a>	        		        
	        </li>
	      
	         @endif
		@endforeach

	      </ul>
		</div>
	</div>
    @endsection

   
@endsection 