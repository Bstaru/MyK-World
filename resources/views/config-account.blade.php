@extends('layouts.master')

@section('title', 'config-account')

@section('PageLayout')
    @parent


  @section('content')

  <div class="row config">

    <div class="tittle-edt">Account Settings</div>

      <form class="form-horizontal formu-edit text-center"> 

       <div class="form-group">
          <label for="input1" class="col-sm-offset-1 col-sm-3 control-label descE">Username</label>
          <div class="col-sm-5">
              <input type="text" class="form-control textE" id="input1" placeholder="Username" 
              value="{{ Auth::user()->username }} ">
          </div>
        </div>

        <div class="form-group">
          <label for="input2" class="col-sm-offset-1 col-sm-3 control-label descE">Email</label>
          <div class="col-sm-5">
              <input type="text" class="form-control textE" id="input2" placeholder="Email"
              value="{{ Auth::user()->email }} ">
          </div>
        </div>

        <div class="form-group">
          <label for="input3" class="col-sm-offset-1 col-sm-3 control-label descE">Change password</label>
           <div class="col-sm-5">
             <input type="text" class="form-control textE" id="input3" placeholder="Password">
           </div>
        </div>

        <div class="form-group">
          <label for="input4" class="col-sm-offset-1 col-sm-3 control-label descE">Repeat password</label>
           <div class="col-sm-5">
             <input type="text" class="form-control textE" id="input4" placeholder="Password">
           </div>
        </div>
          
        <div class="form-group">
          <label for="input5" class="col-sm-offset-1 col-sm-3 control-label descE">Show gender</label>
           <div class="col-sm-5">

             <div class="switch">
                <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round-flat" type="checkbox" value="yesGend">
                <label for="cmn-toggle-1" class="coso"></label>
            </div>
            </div>
        </div>

        <div class="form-group">
          <label for="input6" class="col-sm-offset-1 col-sm-3 control-label descE">Show birthday</label>
           <div class="col-sm-5">

             <div class="switch">
                <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round-flat" type="checkbox" value="yesBirth">
                <label for="cmn-toggle-2" class="coso"></label>
            </div>
            </div>
        </div>

      <input type="button" name="OkEdit" value="Save" class="OkEdit">
    </form>

      <hr class="lineaGG">

    <form class="form-horizontal formu-edit">
         <div class="form-group">
          <label for="input2" class="col-sm-offset-1 col-sm-3 control-label descE">Disable account</label>
          <div class="col-sm-5">
              <input type="button" name="OkBye" value="Disable" class="OkBye">
          </div>
          </div>
    </form>
  
  </div>


  @endsection

   
@endsection 

<!--


-->
