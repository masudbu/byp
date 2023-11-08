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

<div class="hero-container" id="hero-sec">
  	<div class="container-fluid ">
	  	<div class="row d-flex">
		    <div class="col align-middle">
		      <div class="px-2 py-2">
		      <img src="https://img.freepik.com/free-vector/happy-freelancer-with-computer-home-young-man-sitting-armchair-using-laptop-chatting-online-smiling-vector-illustration-distance-work-online-learning-freelance_74855-8401.jpg?w=900&t=st=1667037491~exp=1667038091~hmac=7c71ea8afc8f3cc8065c5ccc05d105e3c8a7b76f0133016cb210a7882dc19611" class="img-fluid" alt="...">
		      </div>
		    </div>
		    <div class="col">
		      <div class="px-5 py-5 mt-5">
		        <div class="px-2 py-2 align-middle">
		        	@if(isset($myinfo))
		        <h4>{{$myinfo->name}}</h4>
		        <p> {{$myinfo->description}}.</p>
		        	@endif
		        </div>
		        <div class="px-2 py-2">
		          <button type="button" class="btn btn-outline-primary">Checkout Our Courses</button>
		        </div>
		      </div>
		    </div>
		</div>
	</div>
</div>
<!-- main container -->
<div class="main-container">
  <div class="container-fluid">
  ...
</div>
</div>

<!--  Card container  -->
<!-- <div class="card-container bg-black" id="team">
  	<div class="container-fluid px-3 py-3">
	    <div class="row center mx-4 my-4 text-white">
	      <h2>Meet Our Expert</h2>
	      <p>Highly professional team</p>
	    </div>
	    <div class="row mb-5">
	      	<div class="col">
		        <div class="card" >
				  <img src="https://img.freepik.com/free-vector/work-time-concept-illustration_114360-1474.jpg?w=740&t=st=1667038053~exp=1667038653~hmac=7f51a4d7c9f7dc9e0e3a6d53d45f381fc455e5424bcc36a0bedca65db24487e7" class="card-img-top" style="height:300px" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Martina doena</h5>
				    <p class="card-text">Highly proficient in Web3 and AI and professional in Designing Websites with tools of Web3.0.</p>
				    <a href="#" class="btn org-btn">Learn More.</a>
				  </div>
				</div>
	      	</div>
	    </div>
	</div>
</div>
 -->
 

  
<!--  banner container  -->
<!-- <div class="banner-container mt-5 mb-5" id="featured">
  	<div class="container-fluid px-4 py-4">
  		<div class="card bg-black text-white shadow-lg ">
  			<h5 class="card-header">Featured Courses</h5>
  			<div class="card-body">
    			<div class="conatiner">
    				<div class="row d-flex justify-content-around">
				      	<div class="col">
				         	<div class="card text-black move-up mb-3" >
						  		<div class="card-header">Web Development</div>
								  <div class="card-body">
								    <h5 class="card-title">Front End + Backend</h5>
								    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								  </div>
							</div>
				      </div>
    				</div>
    			</div>
  			</div>
		</div>
	</div>
</div> -->

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