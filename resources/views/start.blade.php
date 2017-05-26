@extends('layouts.master')

@section('title', 'Start')

@section('PageLayout')
    @parent
    @section('content')

    <div class="row carouselBoard ">
        <div class="col-md-10 col-sm-10 carouselPanel"  >
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/EXO.png" alt="EXO">
                        <div class="carousel-caption">
                            <h3>EXO</h3>
                            <p>Most popular group.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/BTS.jpg" alt="BTS">
                        <div class="carousel-caption">
                            <h3>BTS</h3>
                            <p>Most viewed worldwide.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/TWICE.jpg" alt="TWICE">
                        <div class="carousel-caption">
                            <h3>TWICE</h3>
                            <p>Most liked group of the month.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/BOF.jpg" alt="BOF">
                        <div class="carousel-caption">
                            <h3>Boys Before Flowers</h3>
                            <p>Most seen dorama.</p>
                        </div>
                    </div>
                </div>

              
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-md-2 col-sm-2 carouselMenu ">
            <ul class="nav nav-pills nav-stacked red">
              <li class="active"><a href="#">Most Popular</a></li>
              <li><a href="#">Most Viewed</a></li>
              <li><a href="#">Most liked</a></li>
              <li><a href="#">Most seen</a></li>
              <li><a href="#">Must see</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
            <div class="col-md-12 col-sm-12 separator "><br></div>     
    </div>

    <div class=" row newsBoard  ">
        <div class="col-md-4 col-sm-4 newsPanel ">
            <div class="row text-center">
                <img src="img/DAY6.jpg" class="img-responsive img-rounded " alt="Cinque Terre">
            </div>

            <div class="row">
                <h1>Every Day6</h1>
            </div>

            <div class="row">
                 <p>
                "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum dksjfhskdjhfksdhkfhjsdkfjs
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum dksjfhskdjhfksdhkfhjsdkfjs"
                </p>
            </div>

            <div class="row">
                
                 <a class="btn btn-danger btn-outline btn-block">Check out Day6!</a>
            </div>

            
        </div>

         <div class="col-md-4 col-sm-4 newsPanel ">
             <div class="row ">
                 <img src="img/TWICE.jpg" class="img-responsive img-rounded" alt="Cinque Terre">
             </div>

             <div class="row">
                 <h1>Twiceland</h1>
             </div>

             <div class="row">
                  <p>
                 "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas"
                 </p>
             </div>

             <div class="row">
                 <a class="btn btn-danger btn-outline btn-block">Check out Twice!</a>
             </div>

             
        </div>

        <div class="col-md-4 col-sm-4 newsPanel">
            <div class="row">
                <img src="img/EXO.jpg" class="img-responsive img-rounded" alt="Cinque Terre">
            </div>

            <div class="row">
                <h1>EXOlution in Mexico</h1>
            </div>

            <div class="row">
                 <p>
                "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum "
                </p>
            </div>

            <div class="row">
                  <a class="btn btn-danger btn-outline btn-block">Check out EXO!</a>
            </div>
        </div>
    </div>
    @endsection

   
@endsection 

<!--


-->
