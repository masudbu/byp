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
	  <div class="row">
		  <div class="col-md-2"></div>
	  	<div class="col-md-8">
	 			<h2>{{$data->project_name}}</h2>
	 			<p>{{$data->description}}</p>
	 			<img src="{{$data->project_picture}}" class="rounded mx-auto d-block img-fluid">
	 		</div>
	 		<div class="col-md-2"><a class="btn btn-primary btn-block" href="{{$data->url}}" target="_blank">Visit Link</a></div>
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