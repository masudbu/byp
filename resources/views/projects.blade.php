<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
	<title>Assignment 5</title>
</head>
<body>
<div class="nav-bar">
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="{{route('home')}}">Masud Alam</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{route('myproject')}}">Projects</a>
		        </li>
		        
		        <li class="nav-item">
		          <a class="nav-link" href="{{route('myexprience')}}">Expriences</a>
		        </li>
		      </ul>
		      
		    </div>
	  	</div>
	</nav>
</div>

<!-- main container -->
<div class="main-container">
  	<div class="container-fluid">
  		<!--  banner container  -->
		<div class="banner-container mt-5 mb-5" id="featured">
		  	<div class="container-fluid px-4 py-4">
		  		<div class="card bg-black text-white shadow-lg ">
		  			<h5 class="card-header">Featured Courses</h5>
		  			<div class="card-body">
		    			<div class="conatiner">
		    				<div class="row d-flex justify-content-around">

		    					@if(isset($mydata))
		    					@foreach($mydata as $val)
						      	<div class="col-md-3">
						         	<div class="card text-black move-up mb-3" >
								  		<div class="card-header text-center">{{$val->project_name}}</div>
										  <div class="card-body">
										  	<a href="/project/details/{{$val->id}}">
										    <img src="{{$val->project_picture}}" class="rounded mx-auto d-block img-fluid">
										    </a>
										  </div>
									</div>
						      	</div>
						      	@endforeach
						      	@endif
		    				</div>
		    			</div>
		  			</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- footer -->
<div class="footer-container foot">
  	<div class="container-fluid">
  		<footer>
		    <div class="container-fluid">
			  	<div class="row">
			   		<div class="col-md-4 footer-column">
			        
			      	</div>
				    <div class="col-md-4 footer-column">
				        
				    </div>
			      	<div class="col-md-4 footer-column">
			        
			      	</div>
			    </div>
			    <div class="row text-center">
			      <div class="col-md-4 box">
			        <span class="copyright quick-links">Copyright &copy; Your Website <script>document.write(new Date().getFullYear())</script>
			        </span>
			      </div>
			    </div>
		  	</div>
  		</footer>
	</div>
</div>
</body>
</html>