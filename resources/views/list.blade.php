@extends('layouts.master')

@section('title', 'List')

  @section('PageLayout')
    @parent

    @section('content')
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
				   
	     <a href="/drama/{{$drama->idDrama}}">
	      <li class="list-group-item " >   
	       
	           
	            <div class="imgDramaCont col-lg-2 col-md-2 col-sm-12 col-xs-12">
	            	
	           
	              <img src="{{asset('assets/images/icons/planet.png')}}" class="img-responsive">

	            </div>
	            <div class="nameDramaCont col-lg-7 col-md-7 col-sm-12 col-xs-12">
	              <a href="#">{{ $drama->dramaName }}</a>
	            </div>
	            <div class="moreDramaCont col-lg-3 col-md-3 col-sm-12 col-xs-12">
	                <form name="formulario">


	                  <input type="text" name="Eps" value="0" class="Eps"> of <span>{{ $drama->numberOfEpisodes }}</span> 
	                  

	                  <a href="#" name="masEps" onClick="add(1);" class="btn btn-default">+</a>
	                  <a href="#" class="btn btn-default list-modal-btn" data-toggle="modal"  data-target="#myModal" 
	                  Drama="{{ $drama->idDrama }}" >

	                  Edit</a>

	                </form>



	                <script type="text/javascript">  
	                  function add(delta) {
	                    valor = eval(formulario.Eps.value);
	                    formulario.Eps.value = eval(valor+delta);
	                  }
	                </script>
	            </div>
	             <form method="POST" action="delete_from_list" >
	        	 		{{ csrf_field() }} 
	        	 		<input type="hidden" name="idSelectedDrama" value="{{ $drama->idDrama }}">
	        	 		<input type="submit" name="OkEdit" class="btn btnMdlClose" value="Delete" class="OkEdit">


	        	 </form> 
	        	
	             
	        </li>

	         </a>
    
			
				   
				@endforeach


	       

	        <!--

	        <li  class="list-group-item">            
	            <div class="imgDramaCont col-lg-2 col-md-2 col-sm-12 col-xs-12">
	              <img src="img/drama2.jpg" class="img-responsive">
	            </div>
	            <div class="nameDramaCont col-lg-7 col-md-7 col-sm-12 col-xs-12">
	              <a href="#">You're beautiful</a>
	            </div>
	            <div class="moreDramaCont col-lg-3 col-md-3 col-sm-12 col-xs-12">
	                <form name="formulario2">
	                  <input type="text" name="" value="0" class="Eps"> of <span>16</span> 

	                  <a href="#" name="masEps" onClick="" class="btn btn-default">+</a>
	                  <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal">Edit</a>
	                </form>
	            </div>
	        </li>

	        <li  class="list-group-item">            
	            <div class="imgDramaCont col-lg-2 col-md-2 col-sm-12 col-xs-12">
	              <img src="img/drama3.jpg" class="img-responsive">
	            </div>
	            <div class="nameDramaCont col-lg-7 col-md-7 col-sm-12 col-xs-12">
	              <a href="#">She was beautiful</a>
	            </div>
	            <div class="moreDramaCont col-lg-3 col-md-3 col-sm-12 col-xs-12">
	                <form name="formulario2">
	                  <input type="text" name="" value="0" class="Eps"> of <span>16</span> 

	                  <a href="#" name="masEps" onClick="" class="btn btn-default">+</a>
	                  <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal">Edit</a>
	                </form>
	            </div>
	        </li>

	         <li  class="list-group-item">            
	            <div class="imgDramaCont col-lg-2 col-md-2 col-sm-12 col-xs-12">
	              <img src="img/drama4.jpg" class="img-responsive">
	            </div>
	            <div class="nameDramaCont col-lg-7 col-md-7 col-sm-12 col-xs-12">
	              <a href="#">Descendants of the Sun</a>
	            </div>
	            <div class="moreDramaCont col-lg-3 col-md-3 col-sm-12 col-xs-12">
	                <form name="formulario2">
	                  <input type="text" name="" value="0" class="Eps"> of <span>16</span> 

	                  <a href="#" name="masEps" onClick="" class="btn btn-default">+</a>
	                  <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal">Edit</a>
	                </form>
	            </div>
	        </li>

	        <li  class="list-group-item">            
	            <div class="imgDramaCont col-lg-2 col-md-2 col-sm-12 col-xs-12">
	              <img src="img/drama5.jpg" class="img-responsive">
	            </div>
	            <div class="nameDramaCont col-lg-7 col-md-7 col-sm-12 col-xs-12">
	              <a href="#">Moon Lovers: Scarlet Heart Ryeo</a>
	            </div>
	            <div class="moreDramaCont col-lg-3 col-md-3 col-sm-12 col-xs-12">
	                <form name="formulario2">
	                  <input type="text" name="" value="0" class="Eps"> of <span>20</span> 

	                  <a href="#" name="masEps" onClick="" class="btn btn-default">+</a>
	                  <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal">Edit</a>
	                </form>
	            </div>
	        </li>

	        <li  class="list-group-item">            
	            <div class="imgDramaCont col-lg-2 col-md-2 col-sm-12 col-xs-12">
	              <img src="img/drama6.jpg" class="img-responsive">
	            </div>
	            <div class="nameDramaCont col-lg-7 col-md-7 col-sm-12 col-xs-12">
	              <a href="#">You Who Came From the Stars</a>
	            </div>
	            <div class="moreDramaCont col-lg-3 col-md-3 col-sm-12 col-xs-12">
	                <form name="formulario2">
	                  <input type="text" name="" value="0" class="Eps"> of <span>20</span> 

	                  <a href="#" name="masEps" onClick="" class="btn btn-default">+</a>
	                  <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal">Edit</a>
	                </form>
	            </div>
	        </li>

	        <li  class="list-group-item">            
	            <div class="imgDramaCont col-lg-2 col-md-2 col-sm-12 col-xs-12">
	              <img src="img/drama7.jpg" class="img-responsive">
	            </div>
	            <div class="nameDramaCont col-lg-7 col-md-7 col-sm-12 col-xs-12">
	              <a href="#">Legend of the Blue Sea</a>
	            </div>
	            <div class="moreDramaCont col-lg-3 col-md-3 col-sm-12 col-xs-12">
	                <form name="formulario2">
	                  <input type="text" name="" value="0" class="Eps"> of <span>20</span> 

	                  <a href="#" name="masEps" onClick="" class="btn btn-default">+</a>
	                  <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal">Edit</a>
	                </form>
	            </div>
	        </li>
	        -->
	      </ul>
		</div>
	</div>
    @endsection

   
@endsection 