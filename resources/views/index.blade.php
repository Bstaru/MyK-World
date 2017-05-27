<!DOCTYPE html>
<html>
<head>
	<title>My K-World</title>
	<link rel="icon" href="img\planet.ico">

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


	<!--Librerias-->			
	<script type="text/javascript" src="js/jquery-3.2.1.min.js" ></script>
	<link href="css/bootstrap.css" rel="stylesheet">
	<script type="text/javascript" src="js/jq.js" ></script>

	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<!--Estilos-->	
	<link href="{{asset('css/index.css')}}" rel="stylesheet">

</head>

<body>
<!--BACKGROUND-->
<div id="rotating-item-wrapper" class="col-sm-12">
	<img class="rotating-item img-responsive" src="img/chino1.jpg"/>
	<img class="rotating-item" src="img/chino2.jpg"/>
	<img class="rotating-item" src="img/chino3.jpg"/>
	<img class="rotating-item" src="img/chino4.jpg"/>
	<img class="rotating-item" src="img/chino5.jpg"/>
	<img class="rotating-item" src="img/chino6.jpg"/>
	<img class="rotating-item" src="img/chino7.png"/>
	<img class="rotating-item" src="img/chino8.png"/>
	<img class="rotating-item" src="img/chino9.jpg"/>
</div>

<!--LOGIN-->
	<div class = "row-fluid col-lg-offset-4 col-md-offset-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 login">

		<div class="logo">
			<center>
				<img class =  "img-responsive" src="img/my-k-world-logo.png">
			</center>
		</div>

		<h3>Where you can be CLOSER to Korea</h3>

		<center>
			<input type="button" name="" value = "Sign Up" class="botonSU">
			<input type="button" name="" value = "LogIn" class="botonLI">
		</center>
	</div>
	
<!--YES LOGIN-->
	<div class = "row-fluid col-lg-offset-4 col-md-offset-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 yeslogin">

		<div class="logo">
			<center>
				<img class =  "img-responsive" src="img/my-k-world-logo.png">
			</center>
		</div>

		<h3>Where you can be CLOSER to Korea</h3>

		<center>

			<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
			<!--<input type="text" name="" value = "" class="email" required placeholder="Correo electrónico">-->

			 <input id="email" type="email" class="form-control email" name="email" value="{{ old('email') }}" required  placeholder="Correo electrónico">


			<!--<input type="text" name="" value = "" class="password" required placeholder="Contraseña">-->
			<input id="password" type="password" class="form-control password" name="password" required placeholder="Contraseña">

			<div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>


			<!--<input type="button" name="" value = "Login" class="OkLI">-->
			<button type="submit" class="btn btn-primary" class="OkLI">
                                    Login
                                </button>
			</form>
		</center>
		<div>
			<center>
				<p>I don't have an account: <a href="#" class="singupback">SignUp</a></p>
			</center>
		</div>	
	</div>

<!--SINGUP-->	
	<div class="row-fluid col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6 col-sm-12 col-xs-12 registro">
		
			<div class="row-fluid">
				<form action = "/register2" method = "post">
				{{ csrf_field() }}
					

					<div class="descSU col-lg-4 col-md-4 col-sm-12 col-xs-12">Username</div>
					<input  id="username"  type="text" name="username" class="textSU col-lg-8 col-md-8 col-sm-12 col-xs-12"   value="{{ old('username') }}" required placeholder="Username">

					<div class="descSU col-lg-4 col-md-4 col-sm-12 col-xs-12">Email</div>
					<input id="email" type="text" name="email" class="textSU col-lg-8 col-md-8 col-sm-12 col-xs-12" value="{{ old('email') }}" required placeholder="Email">

					<div class="descSU col-lg-4 col-md-4 col-sm-12 col-xs-12">Password</div>
					<input  id="password"  type="password" name="password" class="textSU col-lg-8 col-md-8 col-sm-12 col-xs-12" required placeholder="Password">

					<div class="descSU col-lg-4 col-md-4 col-sm-12 col-xs-12">Name</div>
					<input id="name" type="text" name="name" class="textSU col-lg-8 col-md-8 col-sm-12 col-xs-12" value="{{ old('name') }}" required placeholder="Name">
					

					<div class="descSU col-lg-4 col-md-4 col-sm-12 col-xs-12">Lastname</div>
					<input  id="lastname" type="text" name="lastname" class="textSU col-lg-8 col-md-8 col-sm-12 col-xs-12"  value="{{ old('lastname') }}" required placeholder="Lastname">

					<div  id="birthday" class="descSU col-lg-4 col-md-4 col-sm-12 col-xs-12">Birthday</div>
					<input type="date" name="birthday" class="textSU col-lg-8 col-md-8 col-sm-12 col-xs-12">
					
					<div class="descSU col-lg-4 col-md-4 col-sm-12 col-xs-12">Gender</div>
					<select  id="gender"  name="gender"  class="textSU col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<option value="2">Female</option>
						<option value="1">Male</option>
						<option value="3">Other</option>
					</select>

					<center>
							<input type="submit" name="OkSU" value="Sign Up" class="OkSU">
					</center>			
				</form>
			</div>
			<div>
				<center>
					<p>I already have an account: <a href="#" class="loginback">Login</a></p>
				</center>
			</div>	
	</div>

<!--ABOUT US-->
	<div class="aboutus">
	  <a href="#" class="btnAbout">About<br>us</a>
	</div>

	<div class="landing row">
		<div class="backIndex row text-center col-xs-12 col-sm-12 col-lg-12">
			<div class="row">
				<a href="#" class="backin">
					<span class="glyphicon glyphicon-circle-arrow-down"></span>
				</a>
			</div>

			<div class="row Landpage ">
		

				<div class = "col-lg-12 col-md-12 col-sm-12 col-sx-12 Landpage-item landPanel-1">
				
							<div class="panel panel-default panel-transparent panel-centered">
							  <div class="panel-heading"><h2>FAV YOUR FAVORITE STAR</h2></div>

								  <div class="panel-body">

								  		<div class="row">
								  			<div class="col-lg-4 col-md-4 col-sm-12 col-sx-4">
								  			 <span class="Landpage-item-img"><img class="img-responsive" src="img/1.png"/> </span>
								  				
								  			</div>
								  			<div class="col-lg-8 col-md-8 hidden-sm hidden-xs">
								  			<span class="Landpage-item-txt"><p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p></span>
								  				
								  			</div>
								  		</div>
								 
							  	  </div>
							</div>

				 <a class="btn btn-danger btn-outline btn-block btn-nextPanel">What is k-pop wold?</a>
				</div>

				

				<div class = "col-lg-12 col-md-12 col-sm-12 col-sx-12 Landpage-item landPanel-2">
				
							<div class="panel panel-default panel-transparent panel-centered">
							  <div class="panel-heading"><h2>RELEVANT NEWS</h2></div>

								  <div class="panel-body">

								  		<div class="row">
								  			<div class="col-lg-4 col-md-4 col-sm-12 col-sx-4">
								  			 <span class="Landpage-item-img"><img class="img-responsive" src="img/2.png"/> </span>
								  				
								  			</div>
								  			<div class="col-lg-8 col-md-8 hidden-sm hidden-xs">
								  			<span class="Landpage-item-txt"><p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p></span>
								  				
								  			</div>
								  		</div>
								 
							  	  </div>
							</div>
				
			
				 <a class="btn btn-danger btn-outline btn-block btn-nextPanel">NEXT</a>
				</div>

				<div class = "col-lg-12 col-md-12 col-sm-12 col-sx-12 Landpage-item landPanel-3">
				

							<div class="panel panel-default panel-transparent panel-centered">
							  <div class="panel-heading"><h2>WATCHED DORAMAS?</h2></div>

								  <div class="panel-body">

								  		<div class="row">
								  			<div class="col-lg-4 col-md-4 col-sm-12 col-sx-4">
								  			 <span class="Landpage-item-img"><img class="img-responsive" src="img/3.png"/> </span>
								  				
								  			</div>
								  			<div class="col-lg-8 col-md-8 hidden-sm hidden-xs">
								  			<span class="Landpage-item-txt"><p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p></span>
								  				
								  			</div>
								  		</div>
								 
							  	  </div>
							</div>
				
				
				 <a class="btn btn-danger btn-outline btn-block btn-nextPanel">NEXT</a>
				</div>


				<div class = "col-lg-12 col-md-12 col-sm-12 col-sx-12 Landpage-item landPanel-4">
					<div class="panel panel-default panel-transparent panel-centered">
						<div class="panel-heading">
							<h2>BE PART OF THE COMUNITY</h2>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-sx-4">
								  			 <span class="Landpage-item-img"><img class="img-responsive" src="img/4.png"/> </span>
								  				
								</div>
											<div class="col-lg-8 col-md-8 hidden-sm hidden-xs">
								  			<span class="Landpage-item-txt"><p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p></span>
								  				
								</div>
							</div>
						</div>
					</div>
				 	<a class="btn btn-danger btn-outline btn-block btn-nextPanel">NEXT</a>
				</div>	
			</div>
		</div>	
	</div>


	
<!--FOOTER-->
   <div class ="pie">
           <center>
                <div class = "container">

                 <div class = "about col-lg-2 col-md-2 col-sm-12 col-sx-12">
                 	
                 </div>

                <div class = "cosita col-lg-8 col-md-8 col-sm-12 col-sx-12" >
                      Website Terms of Use and Privacy Policy Financial Privacy Policy Site Map More Info About My K-World
                </div>

                <div class = "cr col-lg-2 col-md-2 col-sm-12 col-sx-12">
                    Copyright 2017
                </div>
                    
                
                </div>
            </center>
    </div>
<!--LANDING PAGE-->



</body>
	<!--Jcueros y eso-->
	<script type="text/javascript" src = "js/mover.js"></script>
	<script type="text/javascript" src = "js/infiniteImg.js"></script>
</html>