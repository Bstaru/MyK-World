@extends('layouts.master')

@section('title', 'List')

  @section('PageLayout')
    @parent

    @section('content')


    <div class="row centered">

    <h4>Drama name:</h4>
    <h2>{{$resenia->drama->dramaName}}</h2>
   <a href="">Usuario: {{$resenia->user->username}} </a>
   <p class="reseniaP">
   {{$resenia->reseniaTxt}}
   </p>

      
	</div>

  @if(Auth::id()==$resenia->user->id)

	<div class="row">
  <input type="hidden" class="hiddenReseniaid" name="idResenia" value="{{$resenia->id}}">

	<button type="button" class="button btn_deleteResenia">Borrar</button>
  <button type="button" class="button btn_editResenia">Editar</button>
  
  <textarea rows="10" class="form-control edit_resenia">
    
  </textarea>


      
	</div>
  @endif
    @endsection

   
@endsection 