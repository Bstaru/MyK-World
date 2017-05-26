@extends('layouts.master')

@section('title', 'config')

  @section('PageLayout')
    @parent

  @section('content')
    <div class="row config">

    <div class="tittle-edt">Change your profile information</div>

    <form method="post" action="update_profile"  class="form-horizontal formu-edit text-center">   
      {{ csrf_field() }}    

        <div class="justclick">
            <img src="img/justclick.png"/>
        </div>

        <div class = "fotito">
            <div class="uploader" onclick="$('#filePhoto').click()">
                <img src="img/default.png"/>
                <input type="file" name="userprofile_picture"  id="filePhoto" />
            </div>
        </div>

              <div class="form-group">
                  <label for="input4" class="col-sm-offset-1 col-sm-3 control-label descE">Name</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control  textE" name="name" placeholder="Name"
                      value="{{ Auth::user()->name }} ">
                  </div>
              </div>

              <div class="form-group">
                  <label for="input5" class="col-sm-offset-1 col-sm-3 control-label descE">Lastname</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control  textE" name="lastname" placeholder="Lastname"
                      value="{{ Auth::user()->lastname }} ">
                  </div>
              </div>

              <div class="form-group">
                  <label for="input5" class="col-sm-offset-1 col-sm-3 control-label descE">Description</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control  textE" name="description"  placeholder="Description"
                      value="{{ Auth::user()->userDescription }} ">
                  </div>
              </div>

              <div class="form-group">
                  <label for="input6" class="col-sm-offset-1 col-sm-3 control-label descE">Birthday</label>
                  <div class="col-sm-5">
                      <input type="date" class="form-control  textE" name="birthday" placeholder="Birthday"
                      value="{{Auth::user()->birthday}}">
                  </div>
              </div> 

                 
              <div class="form-group">
                <label class="col-sm-offset-1 col-sm-3 control-label  descE" for="gender">Gender</label>
                <div class="col-sm-5">
                  <select id="gender" name="gender" class="form-control textE">
                    <option value="1"
                      {{ Auth::user()->gender=="Male" ? 'selected' : ''}}
                    >Male</option>
                    <option value="2"
                      {{ Auth::user()->gender=="Female" ? 'selected' : ''}}
                    >Female</option>
                    <option value="3"
                      {{ Auth::user()->gender=="Other" ? 'selected' : ''}}
                    >Other</option>
                  </select>
                </div>
              </div>
        
        <input type="submit" name="OkEdit" value="Save" class="OkEdit">
    </form>
  
  </div>




  @endsection

   
@endsection 

<!--


-->
