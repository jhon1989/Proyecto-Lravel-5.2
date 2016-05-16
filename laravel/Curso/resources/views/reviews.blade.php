@extends('layouts.principal')
	@section('content')
                  
                  <div class='search'>
                  	{{Form::open()}}
                  	  @include('search.search')
                  	{{Form::close()}}
                  </div>

				<div class="review-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="{{URL::to('/')}}"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="reviews-section">
				<h3 class="head">Movie Reviews</h3>
					<div class="col-md-9 reviews-grids">
					@foreach($movies as $movie)
							<div class="review">
								<div class="movie-pic">
									<img src="movies/{{$movie->path}}" alt="" style='height:350px'/>
							</div>
                            
						<div class="review-info">
									<a class="span" href="single.html"> 
									<i>Nombre: {{$movie->name}}</i></a>

								    <p class="dirctr"><a href="">Reagan Gavin Rasquinha, </a>TNN, Mar 12, 2015, 12.47PM IST</p>
								    <p class="ratingview">CLIFICACIONES:</p>

								    <div class="rating">
									   <span>☆</span>
									   <span>☆</span>
									   <span>☆</span>
									   <span>☆</span>
									   <span>☆</span>
								    </div>

                                <br>
								<div class='yrw'>
                                    <div class="dropdown-button">
									  <select class="dropdown" tabindex="0" data-settings='{"wrapperClass":"flat"}'>
										<option value="0">Your rating</option>
										<option value="1">1.Poor</option>
										<option value="2">1.5(Below average)</option>
										<option value="3">2.Average</option>
										<option value="4">2.5(Above average)</option>
										<option value="5">3.Watchable</option>
										<option value="6">3.5(Good)</option>
										<option value="7">4.5(Very good)</option>
										<option value="8">5.Outstanding</option>
									  </select>
							        </div>
                                </div>    

                                 
                                <div class='clearfix'></div>
									<p class="info">CAST:&nbsp;&nbsp;{{$movie->cast}}</p>
									<p class="info">DIRECCION:&nbsp;&nbsp;{{$movie->direction}}</p>
									<p class="info">GENERO:&nbsp;&nbsp;{{$movie->genero}}</p>
									<p class="info">DURACION:&nbsp;&nbsp;{{$movie->duration}}</p>
								</div>

							        <div class="rtm text-center" >
								       <a href="#">VER REVISION</a>
							        </div>
							        <div class="wt text-center" >
								       <a href="#">VER TRAILER</a>
							        </div>
							    </div>
							
		 
								<div class="clearfix"></div>
						@endforeach
					
					</div>


					<div class="clearfix"></div>
			</div>
			</div>
		<div class="review-slider">
			 <ul id="flexiselDemo1">
                @foreach($movies as $images)
                   <a href=''> <li style=''><img src="movies/{{$images->path}}" style='width=:150px; height:350px;' title='{{$images->name}}'></li></a>
                @endforeach
			</ul>	

		</div>	
	@endsection
